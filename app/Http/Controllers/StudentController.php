<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function studentlistView(){
        return view('students.list');
    }


    public function createStudentView(){
        return view('students.create');
    }

    public function createStudentMethod(Request $request){
        /// get data from UI
        // $name = $request->name;
        // $name = $request->name;
        
        /***
        $student = new Student();
        $student->name = $name;
        $student->age = $name;
        $ifSaved =  $student->save();
        */

        $ifSaved = Student::create($request->all());


    //    $ifSaved =  Student::create([
    //         "name" => $name,
    //         "age" => $name
    //     ]);

        if( $ifSaved){
            return [
                "message" => " Student saved successfully"
            ];
        }


    }
}
