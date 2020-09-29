<?php

namespace App\Http\Controllers;

use App\Student;
use App\Subject;
use App\Department;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('registration_id', 'asc')->get();
        return view('student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $subjects = Subject::all();
        return view('student.create_student', Compact('subjects', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Check validation
        $validatedData = $request->validate([
            'registration_id' => 'required|integer|',
            'name'            => 'required|string|max:25',
            'department_name' => 'required|string',
            'subject_name'    => 'required|string',
            'info' => 'nullable'
        ]);


//        dd($request->all());


        //Insert data into Student Table
       $student = new Student;
       $student->registration_id = $request['registration_id'];
       $student->name = $request['name'];
       $student->department_name = $request['department_name'];
       $student->subject_name = $request['subject_name'];
       $student->info = $request['info'];
        if ($request->student_image) {
            $file = $request->file('student_image');
            $file->move('images/', $file->getClientOriginalName());
            $student->image = 'images/'.$file->getClientOriginalName();
        }
       $student->save();

        return back()->with('student_add_success_msg','Student added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $student = Student::find($id);
            return view('student.student_details')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments = Department::all();
        $subjects = Subject::all();
        $student = Student::find($id);
        return view ('student.edit_student', Compact('subjects', 'departments'))->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->registration_id = $request['registration_id'];
        $student->name = $request['name'];
        $student->department_name = $request['department_name'];
        $student->info = $request['info'];
        if ($request->student_image) {
            $file = $request->file('student_image');
            $file->move('images/', $file->getClientOriginalName());
            $student->image = 'images/'.$file->getClientOriginalName();
        }
        $student->save();

        return back()->with('student_update_success_msg','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();

        return back()->with('student_delete_success_msg','Student deleted successfully');
    }
}
