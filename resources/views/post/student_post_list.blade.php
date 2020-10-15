@extends('master')

@section('title')
    Add Student Post | Student Management System
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <h2>All Posts</h2>

            @foreach($posts as $post)
                <div class="card card-body">
                    <h3>{{$post->itle}}</h3>
                    <div>
                        {{$post->description}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
