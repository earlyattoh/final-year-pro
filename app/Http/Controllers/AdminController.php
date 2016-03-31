<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\supervisor;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   //  public function __construct(){
   //     $this->middleware('admin');
   // }

    public function home() 
  {
  	return view('admin.pages.dashboard');
  }

  public function addproject() 
  {
  	return view('admin.pages.add-project');
  }

  public function create()
  {
    $students = Student::all();
    // dd($students);
    return view('admin.pages.students', compact('students'));
  }

   public function store(Request $request) 
  {
    $student = new Student;
    $student->first_name = $request->get('firstname');
    $student->last_name = $request->get('surname');
    $student->email = $request->get('email');
    $student->phone_no = $request->get('phone');
    $student->sex = $request->get('sex');
    $student->program = $request->get('program');
    $student->matric_no = $request->get('matricno');
    $student->comment = $request->get('comment');
    $student->save();
    return redirect()->back();
  }

  public function addtopic() 
  {
  	return view('admin.pages.addtopic');
  }

  public function students()
  {
  	return view('admin.pages.students');
  } 

  public function supervisors()
  {
  	return view('admin.pages.supervisors');
  }   

  public function grouping()
  {
  	return view('admin.pages.grouping');
  } 

}
