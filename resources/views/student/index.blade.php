@extends('master')

@section('title')
    Student List | Student Management System
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
           Student List
        </div>
        <div class="card-body">

            @if (Session::has('student_delete_success_msg'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {!! Session::get('student_delete_success_msg') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered w-100">
                    <thead>
                         <tr>
                             <th>Name</th>
                             <th>Registration Id</th>
                             <th>Subject Name</th>
                             <th>Department Name</th>
                             <th>Image</th>
                             <th>Info</th>
                             <th>Action</th>
                         </tr>
                    </thead>

                    <tbody>
                    @isset($students)
                        @foreach($students as $student)
                        <tr>
                            <td>{{$student->name}}</td>
                            <td>{{$student->registration_id}}</td>
                            <td>{{$student->subject_name}}</td>
                            <td>{{$student->department_name}}</td>
                            <td><img src="{{asset($student->image)}}" height="50" width="60"  alt="Image not found"></td>
                            <td>{{$student->info}}</td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center">
                                    <a href="{{route('edit', $student->id)}}" class="btn btn-primary mr-2">Edit</a>
                                    <a href="{{route('show', $student->id)}}" class="btn btn-success mr-2">View</a>
                                    <form action="{{route('student-delete', $student->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @endisset
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
