
@extends('master')

@section('title')
    Edit Student | Student Management System
@endsection

@section('content')


    <div class="card">
        <div class="card-header">
            Edit Student
        </div>

        <div class="card-body">


            @if (Session::has('student_update_success_msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {!! Session::get('student_update_success_msg') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif


            <form action="{{route('update', $student->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$student->name}}" required>
                </div>

                <div class="form-group">
                    <label for="registration_id">Registration No:</label>
                    <input type="number" class="form-control" name="registration_id" id="registration_id" value="{{$student->registration_id}}" required>
                </div>

                <div class="form-group">
                    <label for="subject_name">Select Subject</label>
                    <select class="form-control select2" name="subject_name" id="subject_name">
                        <option disabled>Select Subject</option>
                        @foreach($subjects as $subject)
                            <option @if($subject->subject_name == $student->subject_name) selected @endif value="{{$subject->subject_name}}">{{$subject->subject_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="department_name">Select Department:</label>
                    <select class="form-control select2" name="department_name" id="department_name">
                        @foreach($departments as $department)
                            <option @if($department->department_name == $student->department_name) selected @endif value="{{$department->department_name}}">{{$department->department_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="student_image">Select Image:</label>
                    <div class="custom-file m-b-10">
                        <input type="file" class="custom-file-input" id="student_image" name="student_image">
                        <label class="custom-file-label" for="customFile">Choose image</label>
                    </div>
                    <img class="rounded" id="student_edit_image" src="{{asset('/'.$student->image)}}" alt="Image" width="150px" height="120px">
                    <img id="image_view" class="rounded" src="#" alt="Images" width="150px" height="120px" style="display: none;">
                </div>

                <div class="form-group">
                    <label for="info">Info:</label>
                    <textarea class="form-control" name="info" id="info" rows="6">{{$student->info}}</textarea>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button style="margin-left: 28rem;" type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>

            </form>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image_view').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#student_image").change(function() {
            // $('#student_edit_image').hide();
            $('#image_view').show();
            readURL(this);
        });

    </script>


@endsection
