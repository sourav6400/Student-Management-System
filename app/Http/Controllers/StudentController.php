<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    public function index()
    {
      $student = Student::all();
      return view('index')->with('students', $student);
    }

    public function create()
    {
      return view('create');
    }

    public function store(Request $request)
    {
      //check validation
      $this->validate($request,[
        'name'            => 'required|max:20',
        'registration_id' => 'required|integer',
        'dept'            => 'required|max:15',
        'info'            => 'nullable',
      ]);
      $student = new Student;
      $student->name = $request->name;
      $student->registration_id = $request->reg;
      $student->dept = $request->dept;
      $student->info = $request->info;
      $student->save();

      return redirect()->route('index');

      //insert a new student
    }

    public function edit($id)
    {
      $student = Student::find($id);
      return view('edit')->with('student',$student);
    }

    public function update(Request $request, $id)
    {
      $student = Student::find($id);
      $student->name = $request->name;
      $student->registration_id = $request->reg;
      $student->dept = $request->dept;
      $student->info = $request->info;
      $student->save();

      return redirect()->route('index');

      //update an existing student
    }

    public function delete($id)
    {
      $student = Student::find($id);
      $student->delete();
      return redirect()->route('index');
    }
}
