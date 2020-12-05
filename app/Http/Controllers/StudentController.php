<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    //
    public function display(){
        return View('studentform');
    }
    public function save(request $req){

        $name = $req->input('name');
        $num = $req->input('num');
        $course = $req->input('course');
        $addr = $req->input('addr');

        DB::Select("insert into student(name, num, course, addr) values('$name', $num, '$course','$addr')");

      

        return redirect('/')->with('Success','Data saved');


    }
    public function viewform(){
        return view('studentview');
    }
    public function index(){
        $student = DB::select("select * from student");
        return view('studentview')->with('student',$student);
    }

    public function edit($id){
        $student = DB::select("select * from student where id = $id");
        return view('studentedit')->with('student',$student);
    }
    public function update(Request $req, $id){
        $name = $req->input('name');
        $num = $req->input('num');
        $course = $req->input('course');
        $addr = $req->input('addr');

        DB::Select("update student set name = '$name', num = '$num', course = '$course', addr = '$addr'  where id = $id");

        return redirect('/studentview')->with('Success','Data Updated');

    }

    public function delete($id)
    {
        DB::delete("delete from student where id = $id");

        return redirect('/studentview')->with('Success','Data Deleted');

    }

    public function admin(){
        return view('master');
    }
}
