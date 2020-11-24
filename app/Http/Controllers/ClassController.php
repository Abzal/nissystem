<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Student;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{

  

    public function lessons(){
    	return view('lessons');
    }

    public function categories(){
        $categories = Category::get();
        $students = Student::get();
        $studentcards = Student::first();
        $iin = $studentcards->iin;
        $skds = DB::connection('sqlsrv')->select("SELECT [pList].Name
      ,[FirstName]
      ,[MidName]
      ,[dbo].[pLogData].[TimeVal]
      ,[Description]
      ,[dbo].[pLogData].[Mode]
      ,[dbo].pLogData.DoorIndex
      ,[dbo].pLogData.Mode
  FROM [dbo].[pList], [dbo].[pLogData], [dbo].PDivision
  WHERE plist.Section=Pdivision.ID and Plogdata.HozOrgan=plist.ID and MidName = '$iin'");
         return view('categories', compact(['categories', 'students', 'studentcards', 'skds']));
    }


        public function classes($id){
        $categories = Category::get();
        $students = Student::where('category_id', $id)->get();
        $studentcards = Student::where('id', $id)->first();
                $iin = $studentcards->iin;
        $skds = DB::connection('sqlsrv')->select("SELECT [pList].Name
      ,[FirstName]
      ,[MidName]
      ,[dbo].[pLogData].[TimeVal]
      ,[Description]
      ,[dbo].[pLogData].[Mode]
      ,[dbo].pLogData.DoorIndex
      ,[dbo].pLogData.Mode
  FROM [dbo].[pList], [dbo].[pLogData], [dbo].PDivision
  WHERE plist.Section=Pdivision.ID and Plogdata.HozOrgan=plist.ID and MidName = '$iin'");
        return view('categories', compact(['categories', 'students', 'studentcards', 'skds']));
    }

        public function students($id, $sid){
        $categories = Category::get();
        $students = Student::where('category_id', $id)->get();
        $studentcards = Student::where('id', $sid)->first();
        $iin = $studentcards->iin;
        $skds = DB::connection('sqlsrv')->select("SELECT [pList].Name
      ,[FirstName]
      ,[MidName]
      ,[dbo].[pLogData].[TimeVal]
      ,[Description]
      ,[dbo].[pLogData].[Mode]
      ,[dbo].pLogData.DoorIndex
      ,[dbo].pLogData.Mode
  FROM [dbo].[pList], [dbo].[pLogData], [dbo].PDivision
  WHERE plist.Section=Pdivision.ID and Plogdata.HozOrgan=plist.ID and MidName = '$iin'");
        return view('categories', compact(['categories', 'students', 'studentcards', 'skds']));
    }

}
