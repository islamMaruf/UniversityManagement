@extends('backend.backend-master')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wrapper-page">
                        <div class="m-t-40 card-box">
                           
                            <div class="account-content">
                                <form class="form-horizontal" action="{{route('login')}}" method="Post">
                                    @csrf

                                    <div class="form-group m-b-20">
                                        <div class="col-xs-12">
                                            <label for="email">Email address</label>
                                            <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" id="email" name="email" required="" placeholder="example@gmail.com">
                                            @if ($errors->has('email'))
                                                <span class="text-danger" role="alert"><strong>{{ $errors->first('email') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group m-b-20">
                                        <div class="col-xs-12">

                                            <label for="password">Password</label>
                                            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" required="" id="password" name="password" placeholder="Enter your password">
                                            @if ($errors->has('password'))
                                                <span class="text-danger" role="alert"><strong>{{ $errors->first('password') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group account-btn text-center m-t-10">
                                        <div class="col-xs-12">
                                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
                                        </div>
                                    </div>

                                </form>

                                <div class="clearfix"></div>

                            </div>
                        </div>
                        <!-- end card-box-->




                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    </section>
@endsection