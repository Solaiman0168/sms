@extends('master')

@section('title')
    Add Subject | Student Management System
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

        @if (Session::has('subject_add_success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {!! Session::get('subject_add_success_msg') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card-body">
            <form action="{{url('view-subject')}}" method="post">

                {{ csrf_field() }}

                <div class="form-group mt-5">
                    <label for="subject_name">Name:</label>
                    <input type="text" class="form-control" name="subject_name" id="subject_name" required>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button style="margin-left: 28rem;" type="submit" class="btn btn-success">Add</button>
                    </div>
                </div>

            </form>
        </div>
    </div>


@endsection
