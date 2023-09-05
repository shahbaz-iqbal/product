<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="h-100" data-simplebar>
        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{asset('/')}}/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock mr-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>
                <li>
                    <a href="{{route('admin.dashboard')}}">
                        <i data-feather="airplay"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.categories')}}">
                        <i data-feather="airplay"></i>
                        <span> Category </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.packages')}}">
                        <i data-feather="airplay"></i>
                        <span> Packages </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.users')}}">
                        <i data-feather="airplay"></i>
                        <span> Users </span>
                    </a>
                </li>
                <li>
                    <a href="#project1" data-toggle="collapse">
                        <i data-feather="shopping-cart"></i>
                        <span> Posts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="project1">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.posts')}}">Posts</a>
                            </li>
                            <li>
                                <a href="{{route('admin.posts.create', ['category_id' => '1'])}}">Add Youtube Subscription</a>
                            </li>
                            <li>
                                <a href="{{route('admin.posts')}}">Add Youtube Views</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Sidebar -->
    <div class="clear-fix"></div>
</div>
<!-- Sidebar -left -->