<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);


        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->email)->first();            
            if($user == null){                             
                $ldap_con = ldap_connect("10.23.150.2");
                ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
                if(@ldap_bind($ldap_con,$request->email,$request->password)){
                    $filter = '(userprincipalname='.$request->email.')';
                    $result = ldap_search($ldap_con,'OU=FMSH,DC=nis,DC=edu,DC=kz', $filter) or exit('unable to search');
                    $entries = ldap_get_entries($ldap_con, $result);
                
                    $user = new User();
                    $user->email = $request->email;
                    $user->password = Hash::make($request->password);

                    if(array_key_exists('displayname', $entries[0]))
                        $user->name = $entries[0]['displayname'][0];
                    elseif(array_key_exists('cn', $entries[0])) $user->displayname = $entries[0]['cn'][0];               
                    
                    if(array_key_exists('nisedukzpos', $entries[0]))
                        $user->post = $entries[0]['nisedukzpos'][0];

                    if(array_key_exists('mobile', $entries[0]))
                        $user->mobile = $entries[0]['mobile'][0];

                    if(array_key_exists('nisedukziin', $entries[0]))
                        $user->iin = $entries[0]['nisedukziin'][0];
                    else $user->iin = "";                                                         
                    if(array_key_exists('memberof', $entries[0])){
                        if (strpos($entries[0]['memberof'][0], 'Students') !== false) {
                       $user->role = 'student';
                            }else{
                           $user->role = 'staff';            
                        }    
                    }else{
                            $user->role = 'staff';            
                        }
                    $user->save();                                                                              
                    return $user;
                }              
                
            }else{
                if ($request->password == Hash::check($request->password, $user->password)) {
                    return $user;
                }else{
                  $ldap_con = ldap_connect("10.23.150.2");
                  ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);                  
                  if(@ldap_bind($ldap_con,$request->email,$request->password)){
                      $user->password = Hash::make($request->password);
                      $user->update();
                      return $user;
                  }
                }
            }

           
    });

    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
