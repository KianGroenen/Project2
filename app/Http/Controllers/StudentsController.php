<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudentsController extends Controller
{
   public function create(){

       $students = \App\Student::all();
        $data['students'] = $students;

   	  return view("students.create", $data);
   }

   public function store(Request $request){

/*       $student = new \App\Student();
       $student->email = $request->input('email');
       $student->firstname = $request->input('firstname');
       $student->lastname = $request->input('lastname');
       $student->Save();
*/

        // mass assignment
       \App\Student::create( $request->all() );

   	   return redirect("students/create")->with("status", "Student was created.");
   }
}
