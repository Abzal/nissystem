<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Tet;
use Illuminate\Http\Request;
// use Carbon\Carbon;

class TetController extends Controller
{
    public function tetShow() {

    	$alllist = Tet::get();
    	$myline = Tet::first();
    	$lat = 42.370782;
    	$lng = 69.537293;
    	return view('tet/tet', compact('alllist', 'myline', 'lat', 'lng'));
    }

    public function show(){
        return view('tet/show');
    }

    public function tetList(){
    	return view('admin/addtet');
    }

    public function tetAdd(Request $tet) {

   $tet->file('file')->storeAs('public/img/tet', $tet->file('file')->getClientOriginalName());

    $tetlist = new Tet();
    $tetlist->name = $tet->input('name');
    $tetlist->category = $tet->input('category');
    $tetlist->img = $tet->file('file')->getClientOriginalName();
    $tetlist->describe = $tet->input('describe');
    $tetlist->link = $tet->input('link');
    $tetlist->lat = $tet->input('lat');
    $tetlist->lng = $tet->input('lng');
   // $tetlist->created_at = Carbon::now();
    $tetlist->save();
	return redirect()->route('tet-list')->with('success', 'Добавлено в базу');   	
    }

}

