@extends('master')

@section('title')
    Department List | Student Management System
@endsection


@section('content')

    <div class="card">
        <div class="card-header">
            Department List
        </div>
        <div class="card-body">

            @if (Session::has('department_delete_success_msg'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {!! Session::get('department_delete_success_msg') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

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


            <table class="w-100">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Department Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                    <tbody>

                    <?php $number = 1; ?>

                    @foreach($departments as $department)

                    <tr>
                        <td>{{ $number }}</td>
                        <td>{{$department->department_name}}</td>
                        <td>
                            <form action="{{route('department-delete', $department->id)}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger" value="delete">Delete</button>
                            </form>
                        </td>
                    </tr>

                    <?php $number++; ?>

                    @endforeach

                    </tbody>
            </table>
        </div>
    </div>

@endsection
