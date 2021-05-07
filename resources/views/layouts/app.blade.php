<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Laravel Scaffolding Template">
    <meta name="author" content="Raja Asyraf">
    <meta name="keyword" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/manifest.json"> -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <!-- <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png"> -->
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/free.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/brand.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/flag.min.css">

    <meta name="robots" content="noindex">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="c-app">
    @include('layouts.navigation')
    <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
                data-class="c-sidebar-show">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button>
            <a class="c-header-brand d-lg-none" href="#">
                <svg width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="vendors/@coreui/brand/coreui.svg#full"></use>
                </svg>
            </a>
            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
                data-class="c-sidebar-lg-show" responsive="true">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button>
            <ul class="c-header-nav d-md-down-none">
                <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
                <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
                <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
            </ul>
            <ul class="c-header-nav ml-auto mr-4">
                <li class="c-header-nav-item d-md-down-none mx-2">
                    <a class="c-header-nav-link" href="#">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                        </svg>
                    </a>
                </li>
                <li class="c-header-nav-item d-md-down-none mx-2">
                    <a class="c-header-nav-link" href="#">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                        </svg>
                    </a>
                </li>
                <li class="c-header-nav-item d-md-down-none mx-2">
                    <a class="c-header-nav-link" href="#">
                        <svg class="c-icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                        </svg>
                    </a>
                </li>
                <li class="c-header-nav-item dropdown">
                    <a class="c-header-nav-link" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="c-avatar"><img class="c-avatar-img"
                                src="{{ asset('vendors/@coreui/img/avatars/6.jpeg') }}" alt="user@email.com"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0">
                        <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg> Updates<span class="badge badge-info ml-auto">42</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg> Messages<span class="badge badge-success ml-auto">42</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                            </svg> Tasks<span class="badge badge-danger ml-auto">42</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                            </svg> Comments<span class="badge badge-warning ml-auto">42</span>
                        </a>
                        <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                            </svg> Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                            </svg> Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                            </svg> Payments<span class="badge badge-secondary ml-auto">42</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                            </svg> Projects<span class="badge badge-primary ml-auto">42</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                            </svg> Lock Account
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit()">
                            <svg class="c-icon mr-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg> {{ __('Log out') }}
                        </a>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <div class="c-subheader px-3">
                <ol class="breadcrumb border-0 m-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </header>
        <!-- {{-- $header --}} -->
        <!-- {{-- $slot --}} -->
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-primary">
                                    <div
                                        class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="text-value-lg">9.823</div>
                                            <div>Members online</div>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings">
                                                    </use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                    href="#">Action</a><a class="dropdown-item" href="#">Another
                                                    action</a><a class="dropdown-item" href="#">Something else
                                                    here</a></div>
                                        </div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart1" height="70"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-info">
                                    <div
                                        class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="text-value-lg">9.823</div>
                                            <div>Members online</div>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings">
                                                    </use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                    href="#">Action</a><a class="dropdown-item" href="#">Another
                                                    action</a><a class="dropdown-item" href="#">Something else
                                                    here</a></div>
                                        </div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart2" height="70"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-warning">
                                    <div
                                        class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="text-value-lg">9.823</div>
                                            <div>Members online</div>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings">
                                                    </use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                    href="#">Action</a><a class="dropdown-item" href="#">Another
                                                    action</a><a class="dropdown-item" href="#">Something else
                                                    here</a></div>
                                        </div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart3" height="70"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-danger">
                                    <div
                                        class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="text-value-lg">9.823</div>
                                            <div>Members online</div>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings">
                                                    </use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                    href="#">Action</a><a class="dropdown-item" href="#">Another
                                                    action</a><a class="dropdown-item" href="#">Something else
                                                    here</a></div>
                                        </div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart4" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
</body>

</html>