<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        dd('hello index student');
    }

    public function getByUrl(Request $request, $name ,$num){
        dd($request);
        $data = [$name,$num];
        dd($data);
    }
}
