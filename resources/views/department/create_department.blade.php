@extends('master')

@section('title')
    Add Department | Student Management System
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            Add Department
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

            @if (Session::has('department_add_success_msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {!! Session::get('department_add_success_msg') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form action="{{url('view-department')}}" method="post">

                @csrf

                <div class="form-group">
                    <label for="department_name">Department Name:</label>
                    <input type="text" class="form-control" name="department_name" id="department_name" required>
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
