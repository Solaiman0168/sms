@extends('master')

@section('title')
    Department Post Display | Student Management System
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h3>Department = {{ $departments->department_name }} </h3>
        </div>

        @php
            $dep_post = \App\Post::where('department_name',$departments->department_name)->get();
        @endphp

        @if(isset($dep_post))
            @foreach($dep_post as $post)
                <div class="card-body border">

                    <h2>{{ $post->user_name}}'s post</h2>
                    <h6>{{$post->created_at->diffForHumans()}}</h6>
                    <h3>Subject name = {{$post->subject_name}}</h3>
                    <h4>Problem Title: {{ $post->title }} </h4>
                    <div>
                        <p class="font-16">Description: <span class="text-custom">{!! $post->description  !!}</span></p>
                    </div>

                </div>
            @endforeach
        @endif
    </div>

@endsection
