@extends('master')

@section('title')
    Department Post Display | Student Management System
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h3>Department = {{ $departments->department_name ?? '' }} </h3>
        </div>
        @foreach($departments->posts as $post)
            <div class="card-body">
                <h3>{{ $post->title }} in
                    <mark>
                        <a href="{{route('post.show', $post->id)}}"><small>( {{ $post->department_name }} )</small></a>
                    </mark>
                </h3>
                <div>
                    {!! $post->description  !!}
                </div>
            </div>
        @endforeach
    </div>

@endsection
