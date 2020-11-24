<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherRouteItem;
use Illuminate\Support\Facades\DB;

class TeacherRouteItemController extends Controller
{
    /**
     * Lists all RouteItems models.
     * @return mixed
     */
    public function actionIndex()
    {
        $allItems = TeacherRouteItem::paginate(100);

        return view('teacherroute/teacher-route-item', compact('allItems'));
    }

    public function actionDelete($id = null)
    {
    	if($id != null){
    		DB::table('teacher_route_items')->where('id', $id)->delete();	
    	}
    	
    	return redirect()->route('teacher-route-item');
    }

    public function actionCreate(Request $request)
    {
    	$routeItem = new TeacherRouteItem();
    	$routeItem->item = $request->input('item-name');
    	$routeItem->type = $request->input('item-type');
    	$routeItem->save();
    	return redirect()->route('teacher-route-item');
    }

    public static function getRouteItemTypeValues()
    {
        $type = DB::select( DB::raw("SHOW COLUMNS FROM teacher_route_items WHERE Field = 'type'") )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach( explode(',', $matches[1]) as $value )
            {
                $v = trim( $value, "'" );
                array_push($enum, $v);                
            }
        return $enum;
    }

    

}
