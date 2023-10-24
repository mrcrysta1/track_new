<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fast-Tracking') }}</title>
    <!-- <title>Fast-Tracking</title> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
<!-- ---------------------------------- -->

    <!-- App favicon -->
    <link rel="shortcut icon" href="assetss-dashboard/images/favicon.ico">

    <!-- App css -->
    <link href="assetss-dashboard/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assetss-dashboard/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assetss-dashboard/css/theme.min.css" rel="stylesheet" type="text/css" />
     <!-- Plugins css -->
     <link href="plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
    <!-- -------------------- -->
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    <style>
        
   
.mm-active .active {
  color: white !important;
  background: #FF3B33;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4);
}
.vertical-menu{
box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
#sidebar-menu ul li a {
  margin: 10px 15px 0;
  border-radius: 3px;
  color: #3C4858;
  padding-left: 10px;
  padding-right: 10px;
  text-transform: capitalize;
  font-size: 13px;
  padding: 10px 15px;
}
.hover:hover{
background-color: #E7E9FF;
color: white;
  border-radius: 3px;
  margin: 10px 15px 0;
   width: 13.6rem !important;
  color: #3C4858;
  text-transform: capitalize;
        }
        .btn-secondary , .page-item.active .page-link ,.btn-primary {
  color: #fff;
  z-index: 1;
  background-color: #FF3B33;
  border-color: white;
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4);
  border-radius: 2rem;
}

        .btn-secondary:hover , .page-item.active .page-link:hover ,.btn-primary:hover{
  color: #3C4858;
  background-color: #E7E9FF;
  border-color: white;
}.b::before{
    margin-top: 1rem;
}.card{ box-shadow:0 0.75rem 1.5rem rgba(18,38,63,0.36);}
.cardd:hover{transform: translateY(-1rem)}

  /* ---------------------------------------------------------------------------------------- */
  :root {
  background: #f5f6fa;
  color: #9c9c9c;
  font: 1rem "PT Sans", sans-serif;
}
.uppercase {
  text-transform: uppercase;
}

.btns {
  display: inline-block;
  background: transparent;
  color: inherit;
  font: inherit;
  border: 0;
  outline: 0;
  padding: 0;
  transition: all 200ms ease-in;
  cursor: pointer;
}
.btn-s-primary {
  background: #FF3B33;
  color: #fff;
  box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.1);
  border-radius: 2px;
  padding: 12px 36px;
}
.btn-s-primary:hover {
  background: #FF3B33;
}
.btn-s-primary:active {
  background: #FF3B33;
  box-shadow: inset 0 0 10px 2px rgba(0, 0, 0, 0.2);
}
.btn-s-inside {
  margin-left: -96px;
}

.form_s_field {
  width: 360px;
  background: #fff;
  color: #a3a3a3;
  font: inherit;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.1);
  border: 0;
  outline: 0;
  padding: 22px 18px;
}
    </style>
   
</head>
@php
    // $page = 'home'; 
@endphp
<body>
    <div id="app">
        <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-sm mr-2 d-lg-none header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="header-breadcumb">
                            
                            <h2 class="header-title">{{ $page  }}</h2>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn header-item" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assetss-dashboard/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{-- {{ Auth::user()->name }} --}}
                                </a></span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block">
                                    
                                </i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">

                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></span>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('home') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
