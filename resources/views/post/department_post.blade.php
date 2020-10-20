@extends('master')

@section('title')
    Department Post Display | Student Management System
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h3>Department = {{ $department->department_nmae }}</h3>
        </div>
        @foreach($department->posts as $post)
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
