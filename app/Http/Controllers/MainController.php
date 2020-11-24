<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Box;
use App\Http\Requests\BoxRequest;


class MainController extends Controller
{
        public function index(){
        	$boxes = Box::get();
    	return view('index', compact('boxes'));
    }


   public function boxes(){
   	return view('admin/box');
   }

      public function nav(){
    return view('admin/navbar');
   }

   public function submit(BoxRequest $req){

    $req->file('file')->storeAs('public/img/boxes', $req->file('file')->getClientOriginalName());
    $box = new Box();
    $box->name = $req->input('name');
   	$box->link = $req->input('link');
   	$box->img = $req->file('file')->getClientOriginalName();
   	$box->description = $req->input('description');
   	$box->save();
    
   	return redirect()->route('index')->with('success', 'Добавлено в базу');   	
   }

}
