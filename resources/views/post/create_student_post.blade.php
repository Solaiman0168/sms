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

        <form action="{{route('view.post')}}" method="POST">

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

            <div class="form-group">
                <label for="subject">Subject:</label>
                <select class="form-control select2" name="subject_name" id="subject">
                    <option value="1" disabled>Select Subject</option>
                    @foreach($subjects as $subject)
                        <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection


{{--@section('scripts')--}}

{{--    <script>--}}
{{--        $('.select2').select2();--}}
{{--    </script>--}}

{{--@endsection--}}
