<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherRoute;
use App\Models\TeacherRouteItem;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class TeacherRouteController extends Controller
{

    public function actionView($iin = null){
        if($iin != null){
            $routeItems = TeacherRouteItem::get();
            $staffRoutes = TeacherRoute::where('iin','=',$iin)->get();
            return view('teacherroute/teacher-route-view', ['staffRoutes' => $staffRoutes,'routeItems' => $routeItems]);
        }
    }

    public function actionAllview(){
        //$result = TeacherRoute::get()->unique('iin');
        $result = TeacherRoute::distinct('iin')->pluck('iin');
        $users = User::whereIn('iin', $result)->get();
        return view('teacherroute/teacher-route-allview', ['users' => $users]);
	}

	public function actionIndex(Request $request)
    {
    	
    	$staffRoutes = TeacherRoute::where('iin', '=', $request->user()->iin)->get();
        return view('teacherroute/teacher-route', ['staffRoutes' => $staffRoutes]);                                                                                                             
  }

    public function actionDelete($id = null){

    	if($id != null){
    		DB::table('teacher_routes')->where('id', $id)->delete();	
    	}
    	
    	return redirect()->route('teacher-route-index');

    }

    public function actionCreate(Request $request, $id = null){
    	
    	if($id != null)
    		$model = TeacherRoute::where('id', '=', $id)->first();
    	else
    		$model = new TeacherRoute();

        $routeItems = TeacherRouteItem::get();                

        $result = array();

        $ritemyear = $request->input('ritemyear');

        if($ritemyear!=null){
            $result['ritemyear'] = $ritemyear;
             foreach ($routeItems as $routeItem) {
                $result[$routeItem->id] = $request->input('ritem' . $routeItem->id);
            }  
            $model->alldata = json_encode($result);
            $model->user_id = $request->user()->id;
            $model->iin = $request->user()->iin;
            $model->save();

            return redirect()->route('teacher-route-index');
        }
     
        return view('teacherroute/teacher-route-addedit', [
            'model' => $model,
            'routeItems' => $routeItems,
        ]);        
    }

}
