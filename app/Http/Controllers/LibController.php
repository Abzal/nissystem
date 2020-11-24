<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book; 
use App\Http\Requests\LibRequest;
use Carbon\Carbon;

class LibController extends Controller
{
    public function library(){
    	$admission = Book::get();
    	return view('library.library', compact(['admission']));
    } 


    public function addbooks(LibRequest $books){

    	$book = new Book();
    	$book->lview = $books->input('lview');
    	$book->sl = $books->input('sl');
    	$book->author = $books->input('author');
    	$book->name = $books->input('name');
    	$book->location = $books->input('location');
    	$book->year = $books->input('year');
    	$book->copies = $books->input('copies');
    	$book->created_at = Carbon::now();

    	$book->save();

    	return redirect()->route('library')->with('success','Добавлено в список'); 
    	
    }

        public function addbooksUpdate($id, LibRequest $books){

    	$book = Book::find($id);
       	$book->lview = $books->input('lview');
    	$book->sl = $books->input('sl');
    	$book->author = $books->input('author');
    	$book->name = $books->input('name');
    	$book->location = $books->input('location');
    	$book->year = $books->input('year');
    	$book->copies = $books->input('copies');
    	$book->created_at = Carbon::now();

    	$book->save();

    	return redirect()->route('library')->with('success','Обновлено'); 
    	
    }

    	public function deleteBook($id, LibRequest $books){

    		$book = Book::find($id)->delete();

    		return redirect()->route('library')->with('success', 'Удалено');
    	}





}
