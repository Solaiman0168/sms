@extends('master')

@section('title')
    Add Student Post | Student Management System
@endsection

@section('content')

    <div class="card">
        <div class="card-header">

            <h3>All Posts</h3>

        </div>

        @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (Session::has('student_post_add_success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {!! Session::get('student_post_add_success_msg') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @foreach($posts as $post)
            <div class="card-body">
                <h3>{{ $post->title }} in
                    <mark>
                        <a href="{{route('post.show', $post->department->department_name)}}"><small>( {{ $post->department_name }} )</small></a>
                    </mark>
                </h3>
                <div>
                    {!! $post->description  !!}
                </div>
            </div>
        @endforeach

    </div>

@endsection
