<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Skd;
use Illuminate\Support\Facades\DB;

class SkdController extends Controller
{

        public function piple(){
        $students = Student::get();
        $skds = DB::connection('sqlsrv')->select('SELECT * FROM pList');
        return view('piple', compact(['students', 'skds']));

    }

        public function search()
    {
    	return view('home');
    }

       public function autocomplete(Request $request)
    {
        $data = Student::select("iin")
                ->where("iin","LIKE","%{$request->input('query')}%")
                ->get();
   
        return response()->json($data);
    }

}
