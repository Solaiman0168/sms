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
            <div class="card-body">

                <h2>{{ $post->user_id}}</h2>

                <h3>{{ $post->title }} </h3>

                <div>
                    {!! $post->description  !!}
                </div>

            </div>
        @endforeach
        @endif
    </div>

@endsection
