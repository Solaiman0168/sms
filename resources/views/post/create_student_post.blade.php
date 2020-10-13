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
        <form action="{{route('view.post')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="post_title">Enter Post Title:</label>
                <input type="text" class="form-control" name="post_title" id="post_title" required>
            </div>

            <div class="form-group">
                <label for="post_description">Enter Post Description :</label>
                <input type="number" class="form-control" name="post_description" id="post_description" required>
            </div>

            <div class="form-group">
                <label for="department">Department</label>
                <select class="form-control select2" name="department" id="department">
                    <option value="1" disabled>Select Department</option>
                    @foreach($departments as $department)
                        <option value="{{$department->department_name}}">{{$department->department_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="subject">Subject:</label>
                <select class="form-control select2" name="subject" id="subject">
                    <option value="1" disabled>Select Subject</option>
                    @foreach($subjects as $subject)
                        <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button style="margin-left: 28rem;" type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection
