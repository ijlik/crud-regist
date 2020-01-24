<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Dreamkit - Responsive Bootstrap Admin Template</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.png">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="/css/default-assets/datatables.bootstrap4.css">
    <link rel="stylesheet" href="/css/default-assets/responsive.bootstrap4.css">
    <link rel="stylesheet" href="/css/default-assets/buttons.bootstrap4.css">
    <link rel="stylesheet" href="/css/default-assets/select.bootstrap4.css">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- /Preloader -->

<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="ecaps-page-wrapper">
    <!-- Sidemenu Area -->
    <div class="ecaps-sidemenu-area">
        <!-- Desktop Logo -->
        <div class="ecaps-logo">
            <a href="index.html"><img class="desktop-logo" src="/img/core-img/logo.png" alt="Desktop Logo"> <img class="small-logo" src="img/core-img/small-logo.png" alt="Mobile Logo"></a>
        </div>

        <!-- Side Nav -->
        <div class="ecaps-sidenav" id="ecapsSideNav">
            <!-- Side Menu Area -->
            <div class="side-menu-area">
                <!-- Sidebar Menu -->
                <nav>
                    @if(auth()->user()->role == \App\User::ROLE_POLDA)
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="border-botom-cu"><a href="/home"><i class="zmdi zmdi-balance"></i> <span>ALL DATA</span></a></li>
                            <li class=""><a href="{{ route('admin.user') }}"><i class="zmdi zmdi-balance"></i> <span>USER</span></a></li>
                            <li class=""><a href="{{ route('admin.sector') }}"><i class="zmdi zmdi-balance"></i> <span>RESORT</span></a></li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-email"></i><span>KATEGORI</span> <i class="fa fa-angle-up"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('admin.category') }}">Tambah Kategori</a></li>
                                    @foreach(\App\Category::all() as $ini)
                                        <li><a href="/data/{{ $ini->id }}">{{ $ini->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    @else
                        <ul class="sidebar-menu" data-widget="tree">
                            @foreach(\App\Category::all() as $ini)
                                <li class="border-botom-cu"><a href="/data/{{ $ini->id }}">{{ $ini->name }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </nav>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
        <header class="top-header-area d-flex align-items-center justify-content-between">
            <div class="left-side-content-area d-flex align-items-center">
                <!-- Mobile Logo -->
                <div class="mobile-logo mr-3 mr-sm-4">
                    <a href="index.html"><img src="/img/core-img/small-logo.png" alt="Mobile Logo"></a>
                </div>

                <!-- Triggers -->
                <div class="ecaps-triggers mr-1 mr-sm-3">
                    <div class="menu-collasped" id="menuCollasped">
                        <i class="zmdi zmdi-menu"></i>
                    </div>
                    <div class="mobile-menu-open" id="mobileMenuOpen">
                        <i class="zmdi zmdi-menu"></i>
                    </div>
                </div>

                <!-- Left Side Nav -->


            </div>

            <div class="right-side-navbar d-flex align-items-center justify-content-end">
                <!-- Mobile Trigger -->
                <div class="right-side-trigger" id="rightSideTrigger">
                    <i class="fa fa-reorder"></i>
                </div>

                <!-- Top Bar Nav -->
                <ul class="right-side-content d-flex align-items-center">
                    <li class="nav-item dropdown">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="chat-img-2" src="/img/member-img/1.jpg" alt=""></button>
                        <div class="dropdown-menu profile-info dropdown-menu-right">
                            <!-- User Profile Area -->
                            <div class="user-profile-area">
                                <a href="#" onclick="document.getElementById('form-logout').submit();" class="dropdown-item"><i class="zmdi zmdi-portable-wifi profile-icon" aria-hidden="true"></i> Sign-out</a>
                            </div>
                            <form style="display: none;" id="form-logout" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </header>

        <!-- Main Content Area -->
        <div class="main-content">
            @yield('content')

            <!-- Footer Area -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Area -->
                        <footer class="footer-area d-sm-flex justify-content-center align-items-center justify-content-between">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p class="font-13 font-weight-bold">Created by @<a href="#">Priya Faza.</a> All rights reserved</p>
                            </div>
                            <div class="fotter-icon text-center">
                                <p class="mb-0 font-13 font-weight-bold">2020 © Polda Jatim. </p>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
            @include('notification')
        </div>
    </div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Must needed plugins to the run this Template -->
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bundle.js"></script>
<script src="/js/default-assets/setting.js"></script>
<script src="/js/default-assets/fullscreen.js"></script>

<!-- Active JS -->
<script src="/js/default-assets/active.js"></script>

<!-- These plugins only need for the run this page -->
<script src="/js/default-assets/jquery.datatables.min.js"></script>
<script src="/js/default-assets/datatable.net-bs4.js"></script>

<script>
    $(function() {
        'use strict';

        $(function() {
            $('#dataTableExample').DataTable({
                "aLengthMenu": [
                    [10, 30, 50, -1],
                    [10, 30, 50, "All"]
                ],
                "iDisplayLength": 10,
                "language": {
                    search: ""
                }
            });
            $('#dataTableExample').each(function() {
                var datatable = $(this);
                // SEARCH - Add the placeholder for Search and Turn this into in-line form control
                var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
                search_input.attr('placeholder', 'Search');
                search_input.removeClass('form-control-sm');
                // LENGTH - Inline-Form control
                var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
                length_sel.removeClass('form-control-sm');
            });
        });

    });
</script>
</body>

</html>