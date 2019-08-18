<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MyGuest') }}</title>

    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">MyGuest | Gateway</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light text-white navbar-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column navbar-dark">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#">
                            <span data-feather="home"></span>
                           <i class="fa fa-dashboard"></i>
                            <span class="nav-text">
                                Dashboard <span class="sr-only">(current)</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item text-white">
                        <a class="nav-link" href="{{route('rooms.index')}}">
                            <span data-feather="file"></span>
                           <i class="fa fa-home"></i>
                            <span class="nav-text">
                            Rooms
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                           <i class="fa fa-tags"></i>
                            <span class="nav-text">
                            Reservations
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                           <i class="fa fa-users"></i>
                            <span class="nav-text">
                            Guest List
                                >/span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>

                    <l class="fa fa-money"></l>

                            <span class="nav-text">
                            Payments
                            </span>

                        </a>
                    </li>

                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            @yield('content');
        </main>

    </div>
</div>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/mdb.min.js') }}" defer></script>

</body>
</html>
