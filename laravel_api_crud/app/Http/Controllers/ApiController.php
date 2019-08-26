<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class ApiController extends Controller
{
    public function create(Request $request){
        $student = new Student();
        // dd($request->all());
        
        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->email = $request->input('email');
        $student->password = $request->input('password');

        $student->save();
        return response()->json($student);
    }

    public function read(){

        $student = Student::all();
        return response()->json($student);
    }

    public function show($id){

        $student = Student::find($id);
        return response()->json($student);
    }

    public function update(Request $request, $id){

        // dd($student);
        // dd($request->input('fname'));
        $student = Student::find($id);
        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->email = $request->input('email');
        $student->password = $request->input('password');

        
        $student->save();
        return response()->json($student);
    }

    public function delete(Request $request, $id){

        $student = Student::find($id);
        $student -> delete();
        return response()->json($student);   
    }
}
