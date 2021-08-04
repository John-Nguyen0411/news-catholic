<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Stusent Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('assets/images/favicon.png') }}">
    <!-- Datatable -->
    <link href="{{ URL::to('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::to('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ URL::to('assets/css/skin.css') }}">
    <!-- Pick date -->
    <link href="{{ URL::to('assets/vendor/summernote/summernote.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::to('assets/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendor/pickadate/themes/default.date.css') }}">
    {{-- message toastr --}}
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    @yield('styles')
    @livewireStyles
</head>
<body>
    <!-- Preloader start -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <!-- Preloader end -->
    <!-- Main wrapper start -->
    <div id="main-wrapper">
    @auth

        <!-- Nav header start -->
        <div class="nav-header">
            <a href="{{ route('home') }}" class="brand-logo">
                <img class="logo-abbr" src="{{ URL::to('assets/images/logo-white-2.png') }}" alt="">
                <img class="logo-compact" src="{{ URL::to('assets/images/logo-text-white.png') }}" alt="">
                Cong Giao
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!-- Nav header end -->

        <!-- Header start -->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
										<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
										<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
									</svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img class="img-fluid rounded-circle" width="35" src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->avatar }}">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="{{ route('logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2"> {{ __('Logout') }} </span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Header end ti-comment-alt -->
            <!-- Sidebar start -->
        <div class="dlabnav">
                <div class="dlabnav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label first">Main Menu</li>
                        <li><a class="" href="{{ route('dashboard') }}" aria-expanded="false">
                                <i class="la la-home"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="la la-graduation-cap"></i>
                                <span class="nav-text">Courses</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="all-courses.html">All Courses</a></li>
                                <li><a href="add-courses.html">Add Courses</a></li>
                                <li><a href="edit-courses.html">Edit Courses</a></li>
                                <li><a href="about-courses.html">About Courses</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="la la-book"></i>
                                <span class="nav-text">Quan ly bai viet</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ route('admin.posts.index') }}">Xem cac bai viet</a></li>
                                <li><a href="add-library.html">Cac bai noi bat</a></li>
                                <li><a href="{{ route('admin.posts.create') }}">Them bai viet</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="la la-building"></i>
                                <span class="nav-text">Quan ly Menu</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ route('admin.categories.index') }}">Xem cac Menu</a></li>
                                <li><a href="add-departments.html">Add Departments</a></li>
                                <li><a href="edit-departments.html">Edit Departments</a></li>
                            </ul>
                        </li>

                        <li class="nav-label">Forms</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="la la-file-text"></i>
                                <span class="nav-text">Forms</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="form-element.html">Form Elements</a></li>
                                <li><a href="form-wizard.html">Wizard</a></li>
                                <li><a href="form-editor-summernote.html">Summernote</a></li>
                                <li><a href="form-pickers.html">Pickers</a></li>
                                <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
        </div>
  @endauth

		<!-- Content body start -->
        @yield('content')
        <!-- Content body end -->
    </div>

    <!-- Required vendors -->
    <script src="{{ URL::to('assets/vendor/global/global.min.js') }}"></script>
	<script src="{{ URL::to('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/custom.min.js') }}"></script>
    <!-- Chart Morris plugin files -->
    @auth
    <script src="{{ URL::to('assets/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::to('assets/vendor/morris/morris.min.js') }}"></script>
	<!-- Chart piety plugin files -->
    <script src="{{ URL::to('assets/vendor/peity/jquery.peity.min.js') }}"></script>
	<!-- Demo scripts -->
    <script src="{{ URL::to('assets/js/dashboard/dashboard-2.js') }}"></script>
	<!-- Svganimation scripts -->
    <script src="{{ URL::to('assets/vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ URL::to('assets/vendor/svganimation/svg.animation.js') }}"></script>
    <script src="{{ URL::to('assets/js/styleSwitcher.js') }}"></script>

    {{--<!-- pickdate -->--}}
    {{--<script src="{{ URL::to('assets/vendor/pickadate/picker.js') }}"></script>--}}
    {{--<script src="{{ URL::to('assets/vendor/pickadate/picker.time.js') }}"></script>--}}
    {{--<script src="{{ URL::to('assets/vendor/pickadate/picker.date.js') }}"></script>--}}
    {{--<!-- Pickdate -->--}}
    {{--<script src="{{ URL::to('assets/js/plugins-init/pickadate-init.js') }}"></script>--}}
        @yield('script')
    @stack('child-scripts')

    @endauth
    @livewireScripts
</body>
</html>