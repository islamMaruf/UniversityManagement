@extends('backend.home.home')

@section('Content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h6 class="m-t-0">Add mark to the Student</h6>
                    <span class="text-success ">{{Session::get('message')}}</span>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" method="post" role="form" action="{{ route('admin.submitCourse') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Select Student</label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" name="courseName">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Select Course</label>
                                        <div class="col-lg-12">
                                            <input type="text" name="courseCode" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-12 col-form-label">Enter Course Credit</label>
                                        <div class="col-lg-12">
                                            <input type="number" name="courseCredit" class="form-control">
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
