<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function myView2Method(){
        return view('my_view2');
    }
    public function indexView(){
        $name = "Martin";

        $numbers =[
            99, 33,5,23
        ];

        $students = [
            "std1" => "Steve",
            "std2" => "Sam",
            "std3" => "David",
        ];

        return view('pass_data.index', compact('name', 'numbers', 'students'));
    }

}
