<?php

namespace App\Http\Controllers;

use App\cr;
use App\Subject;
use App\Student;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::orderBy('subject_name', 'asc')->get();
        return view('subject.index')->with('subjects', $subjects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('subject.create_subject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());

        // Insert subject name into subject datatable
        $subject = new Subject;
        $subject->subject_name = $request['subject_name'];
        $subject->save();

        return back()->with('subject_add_success_msg', 'Subject added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $subject = Subject::where('id', $id)->first();

        if ($subject != null) {
            $subject->delete();

            return redirect()->route('subject-index')->with('subject_delete_success_msg','Subject deleted successfully');
        }

        return redirect()->route('subject-index')->with('subject_delete_success_msg','Something Went Wrong');
    }
}
