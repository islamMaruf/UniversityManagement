@extends('backend.home.home')

@section('Content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h6 class="m-t-0">Courses</h6>
                        <span class="text-success ">{{Session::get('message')}}</span>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="post" role="form" action="{{route('admin.submitCourse')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-lg-12 col-form-label">Enter Course name</label>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" name="courseName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-12 col-form-label">Enter Course Code</label>
                                            <div class="col-lg-12">
                                                <input type="text" name="courseCode" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-12 col-form-label">Enter Course Credit</label>
                                            <div class="col-lg-12">
                                                <input type="number" name="courseCredit" class="form-control" >
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
                        <h6 class="m-t-0">Section</h6>
                        <span class="text-success ">{{Session::get('messa')}}</span>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="post" role="form" action="{{route('admin.submitSection')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-lg-12 col-form-label">Enter Section name</label>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" name="sectionName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-12 col-form-label">Select Course</label>
                                            <div class="col-lg-12">
                                                <select class="col-lg-12 form-control" name="course_id" >
                                                    @foreach($courses as $course)
                                                        <option value="{{$course->id}}">{{$course->course_code}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-12 col-form-label">Enter Semester Name</label>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" name="semesterName">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-12 col-form-label">Enter Semester year</label>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" name="semesterYear">
                                            </div>
                                        </div>





                                        <button type="submit" class="btn btn-primary">Submit</button>




                                    </form>
                                </div>



                            </div>

                        </div>

                    </div>
                </div> <!-- end col -->




                <!-- end row -->


            </div>
            <br>



            <div class="row">


                <div class="col-lg-6">
                    <div class="card-box">
                        <div class="m-b-20">
                            <h6 class="m-t-0 mb-3">All Course information</h6>

                            <table class="table m-0 table-bordered " id="tableId">
                                <thead>
                                <tr class="bg-primary text-white">
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Credit</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @php($i=1)
                                @foreach($courses as $course)
                                    <tr class="text-body">
                                        <td>{{$i++}}</td>
                                        <td>{{$course->course_name}}</td>
                                        <td>{{$course->course_code}}</td>
                                        <td>{{$course->course_credit}}</td>
                                        <td>
                                            <input type="button" class="btn btn-primary mr-1 btn-rounded" value="Edit">
                                            <input type="button" class="btn btn-danger ml-1 btn-rounded" value="Delete">

                                        </td>


                                    </tr>
                                @endforeach

                            </table>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-box">
                        <div class="m-b-20">
                            <h6 class="m-t-0 mb-3">All Section information</h6>

                            <table class="table m-0 table-bordered " id="tableId">
                                <thead>
                                <tr class="bg-primary text-white">
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Semester</th>
                                    <th>Year</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @php($i=1)
                                @foreach($sections as $section)
                                    <tr class="text-body">
                                        <td>{{$i++}}</td>
                                        <td>{{$section->section_name}}</td>
                                        <td>{{$section->course_name}}</td>
                                        <td>{{$section->semester}}</td>
                                        <td>{{$section->year}}</td>

                                        <td>
                                            <input type="button" class="btn btn-primary mr-1 btn-rounded" value="Edit">
                                            <input type="button" class="btn btn-danger ml-1 btn-rounded" value="Delete">

                                        </td>


                                    </tr>
                                @endforeach

                            </table>
                        </div>

                    </div>
                </div>


                <!-- end row -->


            </div>

        </div>
    </div>



    <!-- content -->
@endsection










