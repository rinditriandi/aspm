<!-- Sidebar navigation -->
<ul id="slide-out" class="side-nav fixed custom-scrollbar">
    <!-- Logo -->
    <li class="logo-sn waves-effect">
        <div class=" text-center">
            <a href="{{ url('/dashboard') }}" class="pl-0">
                <img src="{{ asset('public/materialize/img/AlamSuteraLong.png') }}" class="">
            </a>
        </div>
    </li>
    <!--/. Logo -->
    <hr>
    
    <!-- Side navigation links -->
    <li>
        <ul class="collapsible collapsible-accordion">
            <li>
                <a href="{{ url('/dashboard') }}" class="collapsible-header waves-effect arrow-r">
                    <i class="fa fa-tachometer"></i> Dashboards</a>
                <div class="collapsible-body">

                </div>
            </li>
            <li>
                <a class="collapsible-header waves-effect arrow-r">
                    <i class="fa fa-photo"></i> Master
                    <i class="fa fa-angle-down rotate-icon"></i>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="{{ url('master/template') }}" class="waves-effect">Template</a>
                        </li>
                        <li>
                            <a href="../pages/register.html" class="waves-effect">Employee</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="collapsible-header waves-effect arrow-r">
                    <i class="fa fa-th"></i> APM
                    <i class="fa fa-angle-down rotate-icon"></i>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="../profile/basic-1.html" class="waves-effect">New APM</a>
                        </li>
                        <li>
                            <a href="../profile/basic-2.html" class="waves-effect">History APM</a>
                        </li>
                        <li>
                            <a href="../profile/extended.html" class="waves-effect">Update APM</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="collapsible-header waves-effect arrow-r">
                    <i class="fa fa-css3"></i> BSC
                    <i class="fa fa-angle-down rotate-icon"></i>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="../css/grid.html" class="waves-effect">New BSC</a>
                        </li>
                        <li>
                            <a href="../css/media.html" class="waves-effect">History BSC</a>
                        </li>
                        <li>
                            <a href="../css/utilities.html" class="waves-effect">Update BSC</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="collapsible-header waves-effect arrow-r">
                    <i class="fa fa-th"></i> IPM
                    <i class="fa fa-angle-down rotate-icon"></i>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="{{ url('ipm/create') }}" class="waves-effect">New IPM</a>
                        </li>
                        <li>
                            <a href="{{ url('ipm') }}" class="waves-effect">History IPM</a>
                        </li>
                        <li>
                            <a href="../components/panels.html" class="waves-effect">Update IPM</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="collapsible-header waves-effect arrow-r">
                    <i class="fa fa-check-square-o"></i> Reports
                    <i class="fa fa-angle-down rotate-icon"></i>
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            <a href="../forms/basic.html" class="waves-effect">Report IPM</a>
                        </li>
                        <li>
                            <a href="../forms/extended.html" class="waves-effect">Outstanding IPM</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <!--/. Side navigation links -->
    <div class="sidenav-bg mask-strong"></div>
</ul>
<!--/. Sidebar navigation -->