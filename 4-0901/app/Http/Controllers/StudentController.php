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

        // foreach(Student::all() as $student) {
        //     echo $student->name;
        // }

        // $url = asset('css/style.css');
        // dd($url);
        // dd('student index 0901');
        // return view('student.index');

        return view('student.index', ['data'=>$data]);
    }
    public function create()
    {

        // model Student data抓出來 透過ORM
        // 存在$data
        $data = Student::all();

        // foreach(Student::all() as $student) {
        //     echo $student->name;
        // }

        // $url = asset('css/style.css');
        // dd($url);
        // dd('student index 0901');
        // return view('student.index');

        return view('student.create', ['data'=>$data]);
    }

    public function store(Request $request)
    {
        //dd('store ok');
        // dd($request->all());
        $student = new Student();
 
        $student->id = $request->id;
        $student->name = $request->name;
        $student->chinese = $request->chinese;
        $student->english = $request->english;
        $student->math = $request->math;
 
        $student->save();

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd('edit ok');
        dd($id);

        // select one data
        // return view data
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
