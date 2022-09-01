<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // model Student data抓出來 透過ORM
        // 存在$data
        $data = Student::all();
        dd($data);

        // foreach(Student::all() as $student) {
        //     echo $student->name;
        // }

        // $url = asset('css/style.css');
        // dd($url);
        // dd('student index 0901');
        // return view('student.index');

        return view('student.index', ['data'=>$data]);
    }
}
