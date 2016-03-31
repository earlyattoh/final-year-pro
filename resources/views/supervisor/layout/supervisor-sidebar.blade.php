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
                        <li class="active"><a href="{{url('supervisor/home')}}">Overview</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Project Topic Allocation </span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('supervisor/add-topic')}}">Add New Topic</a></li>
                        <li><a href="{{url('supervisor/view-topics')}}">View Topics</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-spray"></i> <span> Report Submission </span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('#')}}">Upload Area</a></li>
                    </ul>
                </li>


            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->