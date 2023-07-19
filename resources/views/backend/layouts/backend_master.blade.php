<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <title>{{ env('APP_NAME') }} – @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Mooli Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/animate-css/vivify.min.css">

    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/c3/c3.min.css"/>
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">

    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/datatable/css/dataTables.bootstrap5.min.css"/>
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/toastr/toastr.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/sweetalert2/sweetalert2.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/mooli.min.css">
    <style>
        td.details-control {
        background: url('{{ asset('backend') }}/images/details_open.png') no-repeat center center;
        cursor: pointer;
    }
        tr.shown td.details-control {
            background: url('{{ asset('backend') }}/images/details_close.png') no-repeat center center;
        }
    </style>
</head>
<body data-theme="light">

    <div id="body" class="theme-amethyst">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="{{ asset('backend') }}/images/icon.svg" width="40" height="40" alt="Mooli"></div>
                <p>Please wait...</p>
            </div>
        </div>

        <!-- Theme Setting -->
        <div class="themesetting">
            <a href="javascript:void(0);" class="theme_btn"><i class="fa fa-gear fa-spin"></i></a>
            <ul class="list-group">
                <li class="list-group-item">
                    <ul class="choose-skin list-unstyled mb-0">
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush"><div class="blush"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="timber"><div class="timber"></div></li>
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="amethyst" class="active"><div class="amethyst"></div></li>
                    </ul>
                </li>
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    <span>Light Sidebar</span>
                    <label class="switch sidebar_light">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </li>
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    <span>Gradient</span>
                    <label class="switch gradient_mode">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </li>
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    <span>Dark Mode</span>
                    <label class="switch dark_mode">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </li>
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    <span>RTL version</span>
                    <label class="switch rtl_mode">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </li>
            </ul>
        </div>

        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>

        <div id="wrapper">

            <!-- Page top navbar -->
            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-left">
                        <div class="navbar-btn">
                            <a href="index.html"><img src="{{ asset('backend') }}/images/icon.svg" alt="Mooli Logo" class="img-fluid logo"></a>
                            <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-align-left"></i></button>
                        </div>
                        <form id="navbar-search" class="navbar-form search-form">
                            <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                            <input value="" class="form-control" placeholder="Search here..." type="text">
                        </form>
                    </div>
                    <div class="navbar-right">
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li><a href="javascript:void(0);" class="right_note icon-menu" title="Right Menu">Notes</a></li>
                                <li class="dropdown hidden-xs">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="notification-dot msg">4</span>
                                    </a>
                                    <ul class="dropdown-menu right_chat email mt-0 animation-li-delay">
                                        <li class="header theme-bg gradient mt-0 text-light">You have 4 New eMail</li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar4.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">James Wert <small class="float-right font-12">Just now</small></span>
                                                        <span class="message">Update GitHub</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object" src="{{ asset('backend') }}/images/xs/avatar1.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Folisise Chosielie <small class="float-right font-12">12min ago</small></span>
                                                        <span class="message">New Messages</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object" src="{{ asset('backend') }}/images/xs/avatar5.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Louis Henry <small class="float-right font-12">38min ago</small></span>
                                                        <span class="message">Design bug fix</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media mb-0">
                                                    <img class="media-object" src="{{ asset('backend') }}/images/xs/avatar2.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Debra Stewart <small class="float-right font-12">2hr ago</small></span>
                                                        <span class="message">Fix Bug</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <i class="fa fa-bell-o"></i>
                                        <span class="notification-dot info">4</span>
                                    </a>
                                    <ul class="dropdown-menu feeds_widget mt-0 animation-li-delay">
                                        <li class="header theme-bg gradient mt-0 text-light">You have 4 New Notifications</li>
                                        <li>
                                            <a href="#">
                                                <div class="mr-4"><i class="fa fa-check text-red"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted font-12">9:10 AM</small></h4>
                                                    <small>WE have fix all Design bug with Responsive</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="mr-4"><i class="fa fa-user text-info"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title text-info">New User <small class="float-right text-muted font-12">9:15 AM</small></h4>
                                                    <small>I feel great! Thanks team</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="mr-4"><i class="fa fa-question-circle text-warning"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title text-warning">Server Warning <small class="float-right text-muted font-12">9:17 AM</small></h4>
                                                    <small>Your connection is not private</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="mr-4"><i class="fa fa-thumbs-o-up text-success"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title text-success">2 New Feedback <small class="float-right text-muted font-12">9:22 AM</small></h4>
                                                    <small>It will give a smart finishing to your site</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown language-menu hidden-xs">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="fa fa-language"></i></a>
                                    <div class="dropdown-menu language_widget mt-0">
                                        <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);"><img src="{{ asset('backend') }}/images/flag/us.svg" alt="English" >English</a>
                                        <a class="dropdown-item pt-2 pb-2" href="javascript:void(0);"><img src="{{ asset('backend') }}/images/flag/gb.svg" alt="Bangla" >Bangla</a>
                                    </div>
                                </li>
                                <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="fa fa-comments-o"></i></a></li>
                                <li class="hidden-xs"><a href="javascript:void(0);" id="btnFullscreen" class="icon-menu"><i class="fa fa-arrows-alt"></i></a></li>
                                <li>
                                    <a href="#" class="icon-menu"><i class="fa fa-power-off"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="recent_searche" style="display: none;">
                        <div class="card mb-0">
                            <div class="header">
                                <h2>Recent search result</h2>
                                <ul class="header-dropdown dropdown">
                                    <li><a href="javascript:void(0);">Clear data</a></li>
                                    <li><a href="page-search-results.html"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item p-l-0 p-r-0">
                                        <h6><a href="#">Crush it - Bootstrap Admin Application Template &amp; Ui Kit</a></h6>
                                        <p class="text-muted">It is a long established fact that a reader will be distracted.</p>
                                        <div class="text-muted font-13">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><span class="badge badge-secondary margin-0">React</span></li>
                                                <li class="list-inline-item">Dec 27 2020</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-l-0 p-r-0">
                                        <h6><a href="#">Epic Pro - HR &amp; Project Management Admin Template and UI Kit</a></h6>
                                        <p class="text-muted">he point of using Lorem Ipsum is that it has a more-or-less English.</p>
                                        <div class="text-muted font-13">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><span class="badge badge-success margin-0">HTML</span></li>
                                                <li class="list-inline-item">Oct 13 2020</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-l-0 p-r-0">
                                        <h6><a href="#">Qubes - Responsive Admin Dashboard Template</a></h6>
                                        <p class="text-muted">Commodo excepteur non ut aliqua ex qui velit sed esse consequat in </p>
                                        <div class="text-muted font-13">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><span class="badge badge-danger margin-0">Bootstrap</span></li>
                                                <li class="list-inline-item">Sep 27 2020</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Main left sidebar menu -->
            <div id="left-sidebar" class="sidebar">
                <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
                <div class="navbar-brand">
                    @php
                        $dashboardUrl = '';
                        if (Auth::user()->role == 'Admin') {
                            $dashboardUrl = url('admin/dashboard');
                        } elseif (Auth::user()->role == 'Employee') {
                            $dashboardUrl = url('employee/dashboard');
                        } elseif (Auth::user()->role == 'User') {
                            $dashboardUrl = url('user/dashboard');
                        }else {
                            abort(404);
                        }
                    @endphp
                    <a href="{{ $dashboardUrl }}"><img src="{{ asset('backend') }}/images/icon.svg" alt="Mooli Logo" class="img-fluid logo"><span>{{ env('APP_NAME') }}</span></a>
                    <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="fa fa-close"></i></button>
                </div>
                <div class="sidebar-scroll">
                    <div class="user-account">
                        <div class="user_div">
                            <img src="{{ asset('backend') }}/images/user.png" class="user-photo" alt="User Profile Picture">
                        </div>
                        <div class="dropdown">
                            <span>{{ Auth::user()->role }},</span>
                            <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{ Auth::user()->name }}</strong></a>
                            <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                                <li><a href="{{ route('admin.profile') }}"><i class="fa fa-user"></i>My Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="page-login.html"><i class="fa fa-power-off"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    @include('backend.layouts.navigation')
                </div>
            </div>

            <!-- Right bar chat  -->
            <div id="rightbar" class="rightbar">
                <div class="slim_scroll">
                    <div class="chat_list">
                        <form>
                            <div class="input-group c_input_group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                        <div class="body">
                            <ul class="nav nav-tabs3 white mt-3 d-flex text-center">
                                <li class="nav-item flex-fill"><a class="nav-link active show" data-toggle="tab" href="#chat-Users">Chat</a></li>
                                <li class="nav-item flex-fill"><a class="nav-link" data-toggle="tab" href="#chat-Groups">Groups</a></li>
                                <li class="nav-item flex-fill"><a class="nav-link mr-0" data-toggle="tab" href="#chat-Contact">Contact</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane vivify fadeIn active show" id="chat-Users">
                                    <ul class="right_chat list-unstyled mb-0 animation-li-delay">
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object" src="{{ asset('backend') }}/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Louis Henry <small class="text-muted font-12">10 min</small></span>
                                                    <span class="message">How do you do?</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Debra Stewart <small class="text-muted font-12">15 min</small></span>
                                                    <span class="message">I was wondering...</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Lisa Garett <small class="text-muted font-12">18 min</small></span>
                                                    <span class="message">I've forgotten how it felt before</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar1.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Folisise Chosielie <small class="text-muted font-12">23 min</small></span>
                                                    <span class="message">Wasup for the third time like...</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Marshall Nichols <small class="text-muted font-12">27 min</small></span>
                                                    <span class="message">But we’re probably gonna need a new carpet.</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Debra Stewart <small class="text-muted font-12">38 min</small></span>
                                                    <span class="message">It’s not that bad...</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Lisa Garett <small class="text-muted font-12">45 min</small></span>
                                                    <span class="message">How do you do?</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane vivify fadeIn" id="chat-Groups">
                                    <ul class="right_chat list-unstyled mb-0 animation-li-delay">
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object" src="{{ asset('backend') }}/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">PHP Groups<small class="text-muted font-12">10 min</small></span>
                                                    <span class="message">How do you do?</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Family Groups <small class="text-muted font-12">18 min</small></span>
                                                    <span class="message">I've forgotten how it felt before</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar1.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Friends holic <small class="text-muted font-12">23 min</small></span>
                                                    <span class="message">Wasup for the third time like...</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">CL City 2 <small class="text-muted font-12">45 min</small></span>
                                                    <span class="message">How do you do?</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane vivify fadeIn" id="chat-Contact">
                                    <ul class="right_chat list-unstyled mb-0 animation-li-delay">
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">John Smith <small class="text-muted"><i class="fa fa-star"></i></small></span>
                                                    <span class="message">johnsmith@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar1.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Merri Diamond <small class="text-muted"><i class="fa fa-heart"></i></small></span>
                                                    <span class="message">hermanbeck@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object" src="{{ asset('backend') }}/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Louis Henry <small class="text-muted"><i class="fa fa-star"></i></small></span>
                                                    <span class="message">maryadams@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Andrew Patrick <small class="text-muted"><i class="fa fa-star"></i></small></span>
                                                    <span class="message">mikethimas@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Claire Peters <small class="text-muted"><i class="fa fa-heart"></i></small></span>
                                                    <span class="message">clairepeters@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Debra Stewart <small class="text-muted"><i class="fa fa-star"></i></small></span>
                                                    <span class="message">It’s not that bad...</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Lisa Garett <small class="text-muted"><i class="fa fa-star"></i></small></span>
                                                    <span class="message">eringonzales@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object" src="{{ asset('backend') }}/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Louis Henry <small class="text-muted"><i class="fa fa-star"></i></small></span>
                                                    <span class="message">susiewillis@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="{{ asset('backend') }}/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Debra Stewart <small class="text-muted"><i class="fa fa-star"></i></small></span>
                                                    <span class="message">johnsmith@info.com</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stiky note div  -->
            <div class="sticky-note">
                <a href="javascript:void(0);" class="right_note"><i class="fa fa-close"></i></a>
                <div class="form-group c_form_group">
                    <label>Write your note here</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter here...">
                        <div class="input-group-append"><button class="btn btn-dark btn-sm" type="button">Add</button></div>
                    </div>
                </div>
                <div class="note-body">
                    <div class="card note-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="font-10 text-muted">12 Apr 2020</span>
                            </div>
                            <div>
                                <a href="javascript:void(0);" class="star"><i class="fa fa-star-o"></i></a>
                                <a href="javascript:void(0);" class="delete"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        <div class="note-detail">
                            <span>Commit code on github branch development</span>
                        </div>
                    </div>
                    <div class="card note-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="font-10 text-muted">12 Apr 2020</span>
                            </div>
                            <div>
                                <a href="javascript:void(0);" class="star active"><i class="fa fa-star-o"></i></a>
                                <a href="javascript:void(0);" class="delete"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        <div class="note-detail">
                            <span>Meeting with client for new project.</span>
                        </div>
                    </div>
                    <div class="card note-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="font-10 text-muted">12 Apr 2020</span>
                            </div>
                            <div>
                                <a href="javascript:void(0);" class="star"><i class="fa fa-star-o"></i></a>
                                <a href="javascript:void(0);" class="delete"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        <div class="note-detail">
                            <span>making this the first true generator on the Internet</span>
                        </div>
                    </div>
                    <div class="card note-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="font-10 text-muted">12 Apr 2020</span>
                            </div>
                            <div>
                                <a href="javascript:void(0);" class="star"><i class="fa fa-star-o"></i></a>
                                <a href="javascript:void(0);" class="delete"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        <div class="note-detail">
                            <span>it look like readable English. Many desktop publishing</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main body part  -->
            <div id="main-content">
                <div class="container-fluid">
                    <!-- Page header section  -->
                    <div class="block-header">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <h1>Hi, Welcomeback!</h1>
                                <span>JustDo eCommerce Analytics,</span>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">
                                <div class="d-flex align-items-center justify-content-lg-end mt-4 mt-lg-0 flex-wrap vivify pullUp delay-550">
                                    <div class="border-right pr-4 mr-4 mb-2 mb-xl-0 hidden-xs">
                                        <p class="text-muted mb-1">Purchases <span id="mini-bar-chart3" class="mini-bar-chart"></span></p>
                                        <h5 class="mb-0">289</h5>
                                    </div>
                                    <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                                        <p class="text-muted mb-1">Today’s profit <span id="mini-bar-chart2" class="mini-bar-chart"></span></p>
                                        <h5 class="mb-0">$541</h5>
                                    </div>
                                    <div class="mb-3 mb-xl-0">
                                        <p class="text-muted mb-1">Balance <span id="mini-bar-chart1" class="mini-bar-chart"></span></p>
                                        <h5 class="mb-0">$98M</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @yield('content')
                </div>
            </div>

        </div>

    </div>

    <!-- Javascript -->
    <script src="{{ asset('backend') }}/bundles/libscripts.bundle.js"></script>
    <script src="{{ asset('backend') }}/bundles/vendorscripts.bundle.js"></script>

    <!-- Vedor js file and create bundle with grunt  -->
    <script src="{{ asset('backend') }}/bundles/flotscripts.bundle.js"></script>
    <script src="{{ asset('backend') }}/bundles/c3.bundle.js"></script>
    <script src="{{ asset('backend') }}/bundles/knob.bundle.js"></script>
    <script src="{{ asset('backend') }}/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Project core js file minify with grunt -->
    <script src="{{ asset('backend') }}/bundles/mainscripts.bundle.js"></script>
    <script src="{{ asset('backend') }}/js/index4.js"></script>

    <script src="{{ asset('backend') }}/vendor/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="{{ asset('backend') }}/vendor/toastr/toastr.min.js"></script>
    <script src="{{asset('backend')}}/vendor/printThis/printThis.js"></script>

    <script src="{{ asset('backend') }}/vendor/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/vendor/datatable/js/dataTables.bootstrap5.min.js"></script>

    <script src="{{ asset('backend') }}/js/pages/tables/jquery-datatable.js"></script>

    <script>
        $(document).ready(function() {
            @if(Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}";
                switch(type){
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                        break;

                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;

                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;

                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
            @endif
        });
    </script>

    @yield('script')

</body>
</html>
