@extends('backend.backend-master')

@section('body')

    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            @include('backend.partial.topbar')


        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">

            @include('backend.partial.sidebar')

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            @yield('Content')

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>

@endsection