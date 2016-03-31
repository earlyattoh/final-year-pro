<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">
                <img src="{{ url('') }}/assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Name<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                        <li><a href="{{ url('logout') }}"><i class="md md-settings-power"></i> Logout</a></li>
                    </ul>
                </div>
                <p class="text-muted m-0">Administrator</p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">Navigation</li>

                <li>
                    <a href="{{ url('admin/dashboard') }}" class="waves-effect active"><i class="ti-home"></i> <span> Dashboard </span> </a>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="icon-folder-alt"></i> <span> Projects </span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/admin/projects') }}"> Projects </a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-light-bulb"></i> <span> Topic Allocation </span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/view-alloc')}}"> View Allocations</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-user"></i> <span> Associated Users </span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/users/students')}}"> Students</a></li>
                        <li><a href="{{url('admin/users/supervisors')}}"> Supervisors</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-announcement"></i><span> News Board </span></a>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-file"></i><span
                                class="label label-danger pull-right">6</span><span> Submissions </span></a>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-location-pin"></i><span> User Allocation </span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/grouping')}}"> View Allocations</a></li>
                    </ul>
                </li>

                <li class="text-muted menu-title">Settings</li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-settings"></i><span> General Settings </span></a>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>