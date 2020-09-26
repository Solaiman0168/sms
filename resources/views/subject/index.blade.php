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

                    </td>
                </tr>
                </tbody>
                <?php $number++; ?>

                @endforeach
            </table>
        </div>
    </div>

@endsection
