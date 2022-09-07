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
        // $data = Student::all();
        $data = Student::orderBy('id','desc')->get();

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
 
        // $student->id = $request->id;
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
        // dd($id);
        // first => fetch 單筆資料
        $data = Student::where('id',$id)->first();
        // dd($data);
        return view('student.edit',['data'=>$data]);

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
// array:4 [▼
//   "name" => "text"
//   "chinese" => "123"
//   "english" => "123"
//   "math" => "123"
// ]


        // dd('update ok');
        $input = $request->except(['_method','_token']) ;
        // dd($input['name']);

        $data = Student::find($id);
        // dd($data);
 
        $data->name = $input['name'];
        $data->chinese = $input['chinese'];
        $data->english = $input['english'];
        $data->math = $input['math'];
 
        $data->save();
        return redirect()->route('students.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Student::find($id);

        $data->delete();
        return redirect()->route('students.index');
        // dd('destroy ok');
    }
}