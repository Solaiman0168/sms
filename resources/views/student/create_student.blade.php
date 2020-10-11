@extends('master')

@section('title')
    Add Student | Student Management System
@endsection

@section('content')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

{{--    <script>--}}
{{--        $('.select2').select2();--}}
{{--    </script>--}}


    <div class="card">
        <div class="card-header">
            Add Student
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

            @if (Session::has('student_add_success_msg'))
                <div  class="alert alert-success alert-dismissible fade show" role="alert">
                    {!! Session::get('student_add_success_msg') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif


            <form action="{{route('store')}}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>

                <div class="form-group">
                    <label for="registration_id">Registration No:</label>
                    <input type="number" class="form-control" name="registration_id" id="registration_id" required>
                </div>

                <div class="form-group">
                    <label for="subject_name">Select Subject</label>
                    <select class="form-control select2" name="subject_name" id="subject_name">
                        <option value="1" disabled>Select Subject</option>
                        @foreach($subjects as $subject)
                        <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="department_name">Select Department:</label>
                    <select class="form-control select2" name="department_name" id="department_name">
                        <option value="1" disabled>Select Department</option>
                        @foreach($departments as $department)
                            <option value="{{$department->department_name}}">{{$department->department_name}}</option>
                        @endforeach
                    </select>
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


{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}

    <script>
        $('.select2').select2();
    </script>


@endsection
