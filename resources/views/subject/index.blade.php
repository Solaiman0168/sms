@extends('master')

@section('title')
    Subject List | Student Management System
@endsection


@section('content')

    <div class="card">
        <div class="card-header">
            Subject List
        </div>
        <div class="card-body">

            @if (Session::has('subject_delete_success_msg'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {!! Session::get('subject_delete_success_msg') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif


            <table class="w-100">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Subject Name</th>
                    <th>Action</th>
                </tr>
                </thead>

                <?php $number = 1; ?>

                @foreach($subjects as $subject)
                <tbody>
                <tr>
                    <td>{{ $number }}</td>
                    <td>{{$subject->subject_name}}</td>
                    <td>
                        <form action="{{route('delete', $subject->id)}}" method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger" value="delete">Delete</button>
                        </form>
                    </td>
                </tr>
                </tbody>
                <?php $number++; ?>

                @endforeach
            </table>
        </div>
    </div>

@endsection
