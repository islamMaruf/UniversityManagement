@extends('backend.home.home')

@section('Content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <h6 class="m-t-0">Student information</h6>
                        <div class="col-sm-12">
                            <div class="input-group m-t-10">
                                <select class="form-control">
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>



    <!-- content -->
@endsection






