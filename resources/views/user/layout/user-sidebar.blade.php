<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">Navigation</li>

                <li class="has_sub">
                    <a href="#" class="waves-effect active"><i class="ti-home"></i> <span> Home </span> </a>
                    <ul class="list-unstyled">
                        <li class="active"><a href="{{url('user/home')}}">Overview</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Task Management </span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('user/todo')}}">TODOs</a></li>
                        <li><a href="{{url('user/gantt')}}">Gantt Charts</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-spray"></i> <span> Report Submission </span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('user/chapters-upload')}}">Upload Chapters</a></li>
                        <li><a href="{{url('user/final-upload')}}">Upload Final PDF</a></li>
                    </ul>
                </li>



            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->