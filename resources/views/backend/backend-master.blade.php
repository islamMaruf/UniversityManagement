<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>University Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}backend/images/favicon.ico">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('/')}}backend/plugins/morris/morris.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link href="{{asset('/')}}backend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}backend/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}backend/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}backend/css/style.css" rel="stylesheet" type="text/css" />

    <script src="{{asset('/')}}backend/js/modernizr.min.js"></script>

</head>


<body>

<!-- Begin page -->
@yield('body')
<!-- END wrapper -->



<!-- jQuery  -->
<script src="{{asset('/')}}backend/js/jquery.min.js"></script>
<script src="{{asset('/')}}backend/js/popper.min.js"></script>
<script src="{{asset('/')}}backend/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}backend/js/metisMenu.min.js"></script>
<script src="{{asset('/')}}backend/js/waves.js"></script>
<script src="{{asset('/')}}backend/js/jquery.slimscroll.js"></script>

<!--Morris Chart-->
<script src="{{asset('/')}}backend/plugins/morris/morris.min.js"></script>
<script src="{{asset('/')}}backend/plugins/raphael/raphael-min.js"></script>

<!-- Dashboard init -->
<script src="{{asset('/')}}backend/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="{{asset('/')}}backend/js/jquery.core.js"></script>
<script src="{{asset('/')}}backend/js/jquery.app.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>







</body>
</html>
