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
    </div>
</div>
@endsection
