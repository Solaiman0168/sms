<?php

namespace App\Http\Controllers;

use App\Post;
use App\Department;
use App\Subject;
use App\User;
use Illuminate\Http\Request;

use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $departments = Department::All();
        $subjects = Subject::All();
        $users = User::All();
//          dd($subjects);
       return view('post.student_post_list', compact('departments', 'posts', 'subjects', 'users'));

//        return back()->with('student_post_add_success_msg','Student post added successfully');

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
        return view('post.create_student_post', compact('departments' , 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request   $request
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Request $request)
    {
//        dd($request->all());

        //Insert data into Post Table

        $post = new Post;

        $post->title = $request ['title'];
        $post->description = $request ['description'];
        $post->department_name = $request ['department_name'];
        $post->subject_name = $request ['subject_name'];
        $post->user_id = Auth::user()->name;

        $post->save();

        return redirect('/post/index')->with('student_post_add_success_msg','Student post added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $departments = Department::where('department_name' ,$id)->first();
        $subjects = Subject::All();
     //  dd($departments);
       return view('post.department_post', compact('departments' , 'subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
