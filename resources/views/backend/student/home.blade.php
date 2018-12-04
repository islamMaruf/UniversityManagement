@extends('backend.home.home')

@section('Content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <h4 class="header-title m-t-0 m-b-20">Welcome ! {{ Auth::user()->name }}</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box widget-inline">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="widget-inline-box text-center">
                                <h3 class="m-t-10"><i class="text-primary mdi mdi-account-multiple"></i> <b></b></h3>
                                <p class="text-muted">Total Teachers</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="widget-inline-box text-center b-0">
                                <h3 class="m-t-10"><i class="text-success mdi mdi-run"></i> <b>325</b></h3>
                                <p class="text-muted">Total visitors</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
