@extends('master')

@section('title')
    Add Student Post | Student Management System
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        Add Student Post
    </div>
    <div class="card-body">

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

        <form action="{{route('view.post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Enter Post Title:</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>

            <div class="form-group">
                <label for="description">Enter Post Description :</label>
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>

            <div class="form-group">
                <label for="department_name">Department</label>
                <select class="form-control select2" name="department_name" id="department_name">
                    <option value="1" disabled>Select Department</option>
                    @foreach($departments as $department)
                        <option value="{{$department->department_name}}">{{$department->department_name}}</option>
                    @endforeach
                </select>
            </div>

{{--            <div class="form-group">--}}
{{--                <label for="subject">Subject:</label>--}}
{{--                <select class="form-control select2" name="subject" id="subject">--}}
{{--                    <option value="1" disabled>Select Subject</option>--}}
{{--                    @foreach($subjects as $subject)--}}
{{--                        <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}

            <div class="form-group">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection
