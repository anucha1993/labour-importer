<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Labour-App</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../public/assets/images/logo168.jpg" />
    <!-- Custom CSS -->

    <link
        rel="{{ URL::asset('stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css') }}"
        ntegrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="{{ URL::asset('stylesheet" type="text/css" href="../public/assets/extra-libs/multicheck/multicheck.css') }}" />
    <link href="{{ URL::asset('../public/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />

    <script src="{{ URL::asset('../public/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('../public/assets/extra-libs/DataTables/datatables.min.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('../public/assets/libs/select2/dist/css/select2.min.css') }}" />
    <script src="{{ URL::asset('../public/assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ URL::asset('../public/assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />
    
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('../public/assets/libs/jquery-minicolors/jquery.minicolors.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('../public/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('../public/assets/libs/quill/dist/quill.snow.css') }}" />


    <link href="{{ URL::asset('../public/dist/css/style.min.css') }}" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-duration-format/2.2.2/moment-duration-format.min.js"></script>


</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ URL::asset('../public/assets/images/logo168.jpg') }}" alt="homepage"
                                class="light-logo" width="65" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text ms-2">
                            <!-- dark Logo text -->
                            <img src="{{ URL::asset('../public/assets/images/logo-text.png') }}" alt="homepage"
                                class="light-logo" />
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li> --}}
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="mdi mdi-magnify fs-4"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter" />
                                <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li> --}}
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <ul class="
                  dropdown-menu dropdown-menu-end
                  mailbox
                  animated
                  bounceInDown
                "
                                aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span
                                                        class="
                              btn btn-success btn-circle
                              d-flex
                              align-items-center
                              justify-content-center
                            "><i
                                                            class="mdi mdi-calendar text-white fs-4"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Event today</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span
                                                        class="
                              btn btn-info btn-circle
                              d-flex
                              align-items-center
                              justify-content-center
                            "><i
                                                            class="mdi mdi-settings fs-4"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Settings</h5>
                                                        <span class="mail-desc">You can customize this template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span
                                                        class="
                              btn btn-primary btn-circle
                              d-flex
                              align-items-center
                              justify-content-center
                            "><i
                                                            class="mdi mdi-account fs-4"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span
                                                        class="
                              btn btn-danger btn-circle
                              d-flex
                              align-items-center
                              justify-content-center
                            "><i
                                                            class="mdi mdi-link fs-4"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </ul>
                        </li> --}}
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="
                  nav-link
                  dropdown-toggle
                  text-muted
                  waves-effect waves-dark
                  pro-pic
                "
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ URL::asset('../public/assets/images/logo168.jpg') }}" alt="user"
                                    class="rounded-circle" width="50" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                aria-labelledby="navbarDropdown">
                                {{-- <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="mdi mdi-account me-1 ms-1"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="mdi mdi-email me-1 ms-1"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="mdi mdi-settings me-1 ms-1"></i> Account
                                    Setting</a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i
                                        class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                <div class="dropdown-divider"></div>
                                {{-- <div class="ps-4 p-10">
                                    <a href="javascript:void(0)"
                                        class="btn btn-sm btn-success btn-rounded text-white">View Profile</a>
                                </div> --}}
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        @php
            $notificationController = new App\Http\Controllers\notification\NotificationController();
            
        @endphp
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('dashboard')}}"
                                aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">หน้าแรก </span><i class="mdi mdi-bell font-24"></i><span class="badge rounded-pill bg-danger"> {{ $notificationController->notify(); }}</a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="charts.html"
                                aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                                    class="hide-menu">Charts</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="widgets.html"
                                aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                                    class="hide-menu">Widgets</span></a>
                        </li> --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('labour.index')}}"
                                aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                                    class="hide-menu">ข้อมูลคนงานต่างด้าว</span></a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.html"
                                aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                                    class="hide-menu">Tables</span></a>
                        </li> --}}

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('company.index') }}" aria-expanded="false"><i
                                    class="mdi mdi-border-inside"></i><span class="hide-menu">บริษัท
                                    นายจ้าง</span></a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('agency.index') }}" aria-expanded="false"><i
                                    class="mdi mdi-chart-bubble"></i><span class="hide-menu">เอเจนซี่</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('report.index') }}" aria-expanded="false"><i
                                    class="mdi mdi-file-pdf"></i><span class="hide-menu">รายงาน</span></a>
                        </li>

                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="grid.html"
                                aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Full
                                    Width</span></a>
                        </li>


                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Forms
                                </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-wizard.html" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard
                                        </span></a>
                                </li>
                            </ul>
                        </li> --}}



                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-buttons.html"
                                aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span
                                    class="hide-menu">Buttons</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Icons
                                </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="icon-material.html" class="sidebar-link"><i
                                            class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="icon-fontawesome.html" class="sidebar-link"><i
                                            class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Font Awesome
                                            Icons </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-elements.html"
                                aria-expanded="false"><i class="mdi mdi-pencil"></i><span
                                    class="hide-menu">Elements</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span
                                    class="hide-menu">Addons </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="index2.html" class="sidebar-link"><i
                                            class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-2
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-gallery.html" class="sidebar-link"><i
                                            class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-calendar.html" class="sidebar-link"><i
                                            class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-invoice.html" class="sidebar-link"><i
                                            class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-chat.html" class="sidebar-link"><i
                                            class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option
                                        </span></a>
                                </li>
                            </ul>
                        </li> --}}

                        @if (Auth::user()->type == 'MasterAdmin')
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                    aria-expanded="false"><i class="mdi mdi-account-key"></i><span
                                        class="hide-menu">ระบบสมาชิก</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="{{ route('member.index') }}" class="sidebar-link"><i
                                                class="mdi mdi-all-inclusive"></i><span class="hide-menu">สมาชิก
                                            </span></a>
                                    </li>
{{-- 
                                    <li class="sidebar-item">
                                        <a href="authentication-login.html" class="sidebar-link"><i
                                                class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login
                                            </span></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="authentication-register.html" class="sidebar-link"><i
                                                class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register
                                            </span></a>
                                    </li>--}} 
                                </ul>
                            </li>
                        @endif
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="mdi mdi-alert"></i><span class="hide-menu">ตั้งค่าระบบ
                                </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('setting.index')}}" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu">ตั้งค่าวันหมดอายุ
                                        </span></a>
                                </li>
                           <!-- <li class="sidebar-item">
                                    <a href="error-404.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="error-405.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405
                                        </span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="error-500.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500
                                        </span></a>
                                </li> -->
                            </ul>
                        </li>
                        {{-- <li class="sidebar-item p-3">
                            <a href="https://github.com/wrappixel/matrix-admin-bt5" target="_blank"
                                class="
                  w-100
                  btn btn-cyan
                  d-flex
                  align-items-center
                  text-white
                "><i
                                    class="mdi mdi-cloud-download font-20 me-2"></i>Download
                                Free</a>
                        </li> --}}
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Labour-App</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Library
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>




</body>

<footer class="footer text-center">
    All Rights Reserved by The Importer 168. Co.,Ltd Designed and Developed by
    <a href="https://www.wrappixel.com">Anucha Yothanan</a>.
  </footer>


<!-- Bootstrap tether Core JavaScript -->
<script src="{{ URL::asset('../public/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ URL::asset('../public/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ URL::asset('../public/assets/extra-libs/sparkline/sparkline.js') }}"></script>
<!--Wave Effects -->
<script src="{{ URL::asset('../public/dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ URL::asset('../public/dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ URL::asset('../public/dist/js/custom.min.js') }}"></script>
<!-- this page js -->
<script src="{{ URL::asset('../public/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
<script src="{{ URL::asset('../public/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</html>
