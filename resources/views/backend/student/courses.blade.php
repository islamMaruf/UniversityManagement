@extends('backend.home.home')

@section('Content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <div class="m-b-20">
                        <h6 class="m-t-0 mb-3">All Student course information</h6>
                        <table class="table m-0 table-bordered">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Section</th>
                                    <th>Course</th>
                                    <th>Teacher</th>
                                    <th>Year</th>
                                    <th>Semester</th>
                                </tr>
                            </thead>
                            @php($i=1)
                            @foreach($viewCourses as $course)
                            <tr class="text-body">
                                <td>{{$i++}}</td>
                                <td>{{$course->userName}}</td>
                                <td>{{$course->userEmail}}</td>
                                <td>{{$course->sectionName}}</td>
                                <td>{{$course->courseName}}</td>
                                <td>{{ App\User::all()->find($course->teacher)->email }}</td>
                                <td>{{ $course->year }}</td>
                                <td>{{ $course->semester }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
