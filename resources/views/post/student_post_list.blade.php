@extends('master')

@section('title')
    Add Student Post | Student Management System
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h3>All Posts</h3>

            @foreach($posts as $post)
                <div class="card-body">
                    <h3>{{ $post->title }}</h3>
                    <div>
                        {!! $post->description  !!}
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
