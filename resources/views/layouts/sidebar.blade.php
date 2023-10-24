<div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{ route('home') }}" class="logo">
                        <span>
                            <img src="assetss-dashboard/images/logo.png" style="margin:2rem;" width="40rem" alt="This is img">
                        </span>
                         <h3>{{ Auth::user()->name }}</h3>
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title hover">Menu</li>

                        <li class="hover">
                            <a href="{{ route('home') }}">
                                <i class="feather-home "></i>
                                Dashboard</a>
                        </li>

                        <li class="hover">
                            <a href="{{ route('plan') }}"><i class="feather-copy"></i><span>Plans</span></a>
                        </li>
                        <li class="hover">
                            <a href="{{ route('recent-trackings') }}" ><i class="feather-list"></i><span>Recent Trackings</span></a>
                            
                        </li>
                        <li class="hover">
                            <a href="{{ route('track-form') }}"><i class="feather-disc"></i><span>Track</span></a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>