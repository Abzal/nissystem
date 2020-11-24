<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function($user) {
           return $user->role == 'admin';
        });
       
        /* define a staff user role */
        Gate::define('isStaff', function($user) {
            if($user->role == 'admin')
                return true;
            return $user->role == 'staff';
        });
      
        /* define a student role */
        Gate::define('isStudent', function($user) {
            if($user->role == 'admin')
                return true;
            return $user->role == 'student';
        });

        /* define a student role */
        Gate::define('isKMmoderator', function($user) {
            if($user->role == 'admin')
                return true;
            return $user->role == 'KMmoderator';
        });

    }
}
