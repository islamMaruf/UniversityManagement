<div class="user-details">
    <div class="pull-left">
        <img src="{{asset('/')}}backend/images/users/user.png" alt="" class="thumb-md rounded-circle">
    </div>
    <div class="user-info">
        <a href="#">{{Auth::user()->name}}</a>

        <p class="text-muted m-0">
            @if(Auth::user()->role_id == 1 )
                Admin
            @elseif(Auth::user()->role_id == 2)
                Teacher

            @elseif(Auth::user()->role_id == 3)
                Student
            @endif</p>
    </div>
</div>

<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu" id="side-menu">
        <li class="menu-title">Navigation</li>

        @if(Request::is('admin*'))
            <li >
                <a href="{{route('admin.dashboard')}}">
                    <i class="ti-home"></i><span> Dashboard </span>
                </a>
            </li>

            <li >
                <a><i class="ti-user"></i> <span>Teacher</span> <span class="menu-arrow"></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="{{route('admin.add')}}">Add Teacher</a></li>
                    <li><a href="#">Add Course for Teacher</a></li>
                    <li><a href="">View all Information</a></li>
                </ul>
            </li>

            <li>
                <a href="{{route('admin.dashboard')}}"><i class="ti-face-smile"></i> <span>Student</span> <span class="menu-arrow"></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="{{route('admin.viewStudent')}}">Add Student</a></li>
                    <li><a href="#">Add Course for Student</a></li>
                    <li><a href="">View all Information</a></li>
                </ul>
            </li>



            <li>
                <a href="{{route('admin.dashboard')}}"><i class="ti-notepad"></i> <span>Course</span> <span class="menu-arrow"></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="{{route('admin.viewCourse')}}">Course Related</a></li>
                </ul>

            </li>

        @endif


        @if(Request::is('student*'))
        <li>
            <a href="{{route('student.dashboard')}}">
                <i class="ti-home"></i><span> Dashboard </span>
            </a>
        </li>
        <li>
            <a href="{{route('student.manage')}}">
                <i class="ti-anchor"></i><span>See Courses</span>
            </a>
        </li>
        <li>
            <a href="{{route('student.manage')}}">
                <i class="ti-anchor"></i><span>Predict Result</span>
            </a>
        </li>

        @endif

        @if(Request::is('teacher*'))
        <li>
            <a href="{{route('teacher.dashboard')}}">
                <i class="ti-home"></i><span> Dashboard </span>
            </a>

            <a href="{{route('teacher.manage')}}">
                <i class="ti-alarm-clock"></i><span> Course </span>
            </a>

        </li>
        @endif

    </ul>

</div>

