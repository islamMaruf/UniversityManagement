@extends('backend.home.home')

@section('Content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h6 class="m-t-0">Enter teacher information </h6>
                    <span class="text-success ">{{Session::get('message')}}</span>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" method="post" role="form" action="{{route('admin.submitTeacher')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Enter teacher name</label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label" for="example-email">Email</label>
                                        <div class="col-lg-12">
                                            <input type="email" id="example-email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Password</label>
                                        <div class="col-lg-12">
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box">
                    <div class="m-b-20">
                        <h6 class="m-t-0 mb-3">All teacher information</h6>
                        <table class="table m-0 table-bordered table-responsive">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>User Id</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @php($i=1)
                            @foreach($users as $user)
                            <tr class="text-body">
                                <td>{{$i++}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->id}}</td>
                                <td>{{$user->email}}</td>
                                <td >
                                    <input type="button" class="btn btn-primary" value="Edit">
                                    <input type="button" class="btn btn-danger" value="Delete">

                                </td>


                            </tr>
                            @endforeach
                        </table>
                    </div>

                </div>


            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h6 class="m-t-0">Add Course to teacher</h6>
                    <span class="text-success ">{{Session::get('mess')}}</span>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" method="post" role="form" action="{{route('admin.addTeacherCourse')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Select Teacher</label>
                                        <div class="col-lg-12">
                                            <select class="col-lg-12 form-control" name="user_id">
                                                @foreach($users as $user)
                                                <option value="{{$user->id}}">{{$user->email}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Select Course</label>
                                        <div class="col-lg-12">
                                            <select class="col-lg-12 form-control" name="course_id">
                                                @foreach($courses as $cours)
                                                <option value="{{$cours->course_id}}">{{$cours->course_name}}</option>
                                                @endforeach

                                            </select>


                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Select Section</label>
                                        <div class="col-lg-12">
                                            <select class="col-lg-12 form-control" name="sec_id">
                                                @foreach($sections as $section)
                                                <option value="{{$section->id}}">{{$section->section_name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Select Section year</label>
                                        <div class="col-lg-12">
                                            <select class="col-lg-12 form-control" name="sec_year">
                                                @foreach($years as $year)
                                                <option value="{{ $year }}">{{$year}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Select Section Semester</label>
                                        <div class="col-lg-12">
                                            <select class="col-lg-12 form-control" name="sec_semester">
                                                @foreach($semesters as $semester)
                                                <option value="{{$semester}}">{{ $semester}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box">
                    <div class="m-b-20">
                        <h6 class="m-t-0 mb-3">All Teacher Course information</h6>
                        <table class="table m-0 table-bordered table-responsive">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Section</th>
                                    <th>Course</th>
                                    <th>Semester</th>
                                    <th>Year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @php($i=1)
                            @foreach($courseDetails as $course)
                            <tr class="text-body">
                                <td>{{$i++}}</td>
                                <td>{{$course->name}}</td>
                                <td>{{$course->email}}</td>
                                <td>{{$course->section_name}}</td>
                                <td>{{$course->course_name}}</td>
                                <td>{{$course->semester}}</td>
                                <td>{{$course->year}}</td>

                                <td>
                                    <input type="button" class="btn btn-primary mb-2" value="Edit">
                                    <input type="button" class="btn btn-danger" value="Delete">

                                </td>


                            </tr>
                            @endforeach

                        </table>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>



<!-- content -->
@endsection
