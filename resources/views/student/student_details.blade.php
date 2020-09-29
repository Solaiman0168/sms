
@extends('master')

@section('content')

<div class="card">
    <div class="card-header">
        Student Profile
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <img style="margin-top: 6.5rem; margin-left: 6rem;" src="{{asset($student->image)}}" height="100" width="150"  alt="Responsive image">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <table class="table table-bordered mt-3">
                                    <tr>
                                        <td>Name</td>
                                        <td> {{ $student->name }} </td>
                                    </tr>
                                    <tr>
                                        <td>Registration NO</td>
                                        <td> {{ $student->registration_id }} </td>
                                    </tr>
                                    <tr>
                                        <td>Subject Name</td>
                                        <td>
                                            {{$student->subject_name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Department Name</td>
                                        <td>
                                            {{$student->department_name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Info</td>
                                        <td> {{ $student->info }} </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
