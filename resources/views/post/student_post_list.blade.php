@extends('master')

@section('title')
    Add Student Post | Student Management System
@endsection

@section('content')

    <div class="card">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card-header">
                    <h3>All Student's Post</h3>
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
                    <div class="card-body border">

                        <h2>{{ $post->user_name}}'s post</h2>
                        <h6>{{$post->created_at->diffForHumans()}}</h6>
                        <h3> Department Name =
                            <mark>
                                <a href="{{route('post.show', $post->department_name)}}"><small>( {{ $post->department_name }} )</small></a>
                            </mark>
                        </h3>
                        <h3>Subject Name = {{ $post->subject_name }}</h3>
                        <h3>Problem Title: {{ $post->title }}</h3>
                        <div>
                            <p class="font-16">Description: <span class="text-custom">{!! $post->description  !!}</span></p>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
