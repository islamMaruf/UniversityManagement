@extends('backend.home.home')

@section('Content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card-box">
                    <h6 class="m-t-0">Add mark to the Student</h6>
                    <span class="text-success ">{{ Session::get('message') }}</span>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" method="post" role="form" action="{{route('teacher.submitStudentResult')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Select Student</label>
                                        <div class="col-lg-12">
                                            <select class="col-lg-12 form-control" name="student_id" >
                                                @foreach($markInfo as $mark)
                                                    <option value="{{$mark->student}}">{{\App\User::find($mark->student)->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Select Student Course</label>
                                        <div class="col-lg-12">
                                            <select class="col-lg-12 form-control" name="course_id" >
                                                @foreach($markInfo as $mark)
                                                    <option value="{{$mark->courseId}}">{{\App\Course::find($mark->courseId)->course_name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Enter attendance mark</label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" name="attendance">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Enter assignment mark</label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" name="assignment">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Enter quiz mark</label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" name="quiz">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Enter midterm mark</label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" name="midTerm">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Enter presentation mark</label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" name="presentation">
                                        </div>
                                    </div>



                                    <button type="submit" class="btn btn-primary">Submit</button>




                                </form>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <div class="m-b-20">
                        <h6 class="m-t-0 mb-3">All student course information</h6>
                        <table class="table m-0 table-bordered ">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>SL</th>
                                <th>Student Name</th>
                                <th>Course</th>
                                <th>Attendance</th>
                                <th>Assignment</th>
                                <th>Quiz</th>
                                <th>Presentation</th>
                                <th>MidTerm</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @php($i=1)
                            @foreach($markDetails as $markDetail)
                                <tr class="text-body">
                                    <td>{{$i++}}</td>
                                    <td>{{\App\User::find($markDetail->student_id)->name}}</td>
                                    <td>{{\App\Course::find($markDetail->course_id)->course_name}}</td>
                                    <td>{{$markDetail->attendance}}</td>
                                    <td>{{$markDetail->quiz}}</td>
                                    <td>{{$markDetail->assignment}}</td>
                                    <td>{{$markDetail->midTerm}}</td>
                                    <td>{{$markDetail->presentation}}</td>

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

    </div>
</div>
@endsection
