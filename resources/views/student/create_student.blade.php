@extends('master')

@section('title')
    Add Student | Student Management System
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            Add Student
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

        @if (Session::has('student_add_success_msg'))
            <div  class="alert alert-warning alert-dismissible fade show" role="alert">
                {!! Session::get('student_add_success_msg') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif



        <div class="card-body">
            <form action="{{route('store')}}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group mt-5">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>

                <div class="form-group">
                    <label for="registration_id">Registration No:</label>
                    <input type="number" class="form-control" name="registration_id" id="registration_id" required>
                </div>

                <div class="form-group">
                    <label for="department_name">Department:</label>
                    <input type="text" class="form-control" name="department_name" id="department_name" required>
                </div>

                <div class="form-group">
                    <label for="student_image">Select Image:</label>
                    <input type="file" class="form-control" id="student_image" name="student_image">
                </div>

                <div class="form-group">
                    <label for="info">Info:</label>
                    <textarea class="form-control" name="info" id="info" rows="6"></textarea>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button style="margin-left: 28rem;" type="submit" class="btn btn-success">Add Student</button>
                    </div>
                </div>

            </form>
        </div>
    </div>



@endsection
