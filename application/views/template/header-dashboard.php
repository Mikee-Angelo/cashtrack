<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Cashtrackit | <?php echo $data['title'];?></title>
    <meta content="Cashtrackit" name="description">
    <meta content="Themesbrand" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- App Icons -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/morris/morris.css"><!-- Basic Css files -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="fixed-left">

<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div><!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left"><a href="index.html" class="logo"><img src="<?php echo base_url();?>assets/images/logo.png" alt="" height="20"
                    class="logo-large"> <img src="<?php echo base_url();?>assets/images/logo-sm.png" alt="" height="22" class="logo-sm"></a></div>
        <nav class="navbar-custom">
            <!-- Search input -->
            <div class="search-wrap" id="search-wrap">
                <div class="search-bar"><input class="search-input" type="search" placeholder="Search"> <a href="#"
                        class="close-search toggle-search" data-target="#search-wrap"><i class="mdi mdi-close-circle"></i></a></div>
            </div>
            <ul class="navbar-right d-flex list-inline float-right mb-0">
                <li class="list-inline-item dropdown notification-list flags-dropdown d-none d-sm-inline-block"><a
                        class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="assets/images/flags/us_flag.jpg"
                            alt="" class="flag-img"> United States <i class="mdi mdi-chevron-down"></i></a>
                    <div class="dropdown-menu dropdown-menu-animated"><a href="#" class="dropdown-item"><img src="assets/images/flags/french_flag.jpg"
                                alt="" class="flag-img"> French</a> <a href="#" class="dropdown-item"><img src="assets/images/flags/germany_flag.jpg"
                                alt="" class="flag-img"> Germany</a> <a href="#" class="dropdown-item"><img src="assets/images/flags/italy_flag.jpg"
                                alt="" class="flag-img"> Italy</a> <a href="#" class="dropdown-item"><img src="assets/images/flags/spain_flag.jpg"
                                alt="" class="flag-img"> Spain</a></div>
                </li>
                <li class="list-inline-item dropdown notification-list"><a class="nav-link waves-effect toggle-search"
                        href="#" data-target="#search-wrap"><i class="mdi mdi-magnify noti-icon"></i></a></li>
                <li class="list-inline-item dropdown notification-list"><a class="nav-link dropdown-toggle arrow-none waves-effect"
                        data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i
                            class="mdi mdi-bell-outline noti-icon"></i> <span class="badge badge-info badge-pill noti-icon-badge">3</span></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-arrow dropdown-menu-lg">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5>Notification (3)</h5>
                        </div>
                        <div class="slimscroll-noti">
                            <!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy
                                        text of the printing and typesetting industry.</span></p>
                            </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                <p class="notify-details"><b>New Message received</b><span class="text-muted">You
                                        have 87 unread messages</span></p>
                            </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is
                                        a long established fact that a reader will</span></p>
                            </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                <p class="notify-details"><b>New Message received</b><span class="text-muted">You
                                        have 87 unread messages</span></p>
                            </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy
                                        text of the printing and typesetting industry.</span></p>
                            </a></div><!-- All--> <a href="javascript:void(0);" class="dropdown-item notify-all">View
                            All</a>
                    </div>
                </li><!-- User-->
                <li class="list-inline-item dropdown notification-list"><a class="nav-link dropdown-toggle arrow-none waves-effect nav-user"
                        data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img
                            src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle"> <span class="d-none d-md-inline-block ml-1">Donald
                            T. <i class="mdi mdi-chevron-down"></i></span></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown"><a class="dropdown-item"
                            href="#"><i class="dripicons-user text-muted"></i> Profile</a> <a class="dropdown-item"
                            href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a> <a class="dropdown-item"
                            href="#"><span class="badge badge-success float-right m-t-5">5</span><i class="dripicons-gear text-muted"></i>
                            Settings</a> <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i>
                            Lock screen</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i>
                            Logout</a>
                    </div>
                </li>
            </ul>
            <ul class="list-inline menu-left mb-0">
                <li class="float-left"><button class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button></li>
            </ul>
        </nav>
    </div><!-- Top Bar End -->
    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Main</li>
                    <li><a href="index.html" class="waves-effect"><i class="dripicons-meter"></i><span class="badge badge-info badge-pill float-right">2</span>
                            <span>Dashboard</span></a></li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-message"></i><span>
                                Email <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Email Read</a></li>
                            <li><a href="email-compose.html">Email Compose</a></li>
                        </ul>
                    </li>
                    <li><a href="calendar.html" class="waves-effect"><i class="dripicons-calendar"></i><span>
                                Calendar</span></a></li>
                    <li class="menu-title">Components</li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i>
                            <span>UI Elements <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-badge.html">Badge</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                            <li><a href="ui-navs.html">Navs</a></li>
                            <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-images.html">Images</a></li>
                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                            <li><a href="ui-lightbox.html">Lightbox</a></li>
                            <li><a href="ui-pagination.html">Pagination</a></li>
                            <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-video.html">Video</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-broadcast"></i>
                            <span>Icons <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="icons-material.html">Material Design</a></li>
                            <li><a href="icons-ion.html">Ion Icons</a></li>
                            <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                            <li><a href="icons-themify.html">Themify Icons</a></li>
                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                            <li><a href="icons-typicons.html">Typicons Icons</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-to-do"></i><span>
                                Forms <span class="badge badge-pill badge-success float-right">8</span></span></a>
                        <ul class="submenu">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-advanced.html">Form Advanced</a></li>
                            <li><a href="form-editors.html">Form Editors</a></li>
                            <li><a href="form-uploads.html">Form File Upload</a></li>
                            <li><a href="form-mask.html">Form Mask</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-xeditable.html">Form Xeditable</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-bar"></i><span>
                                Charts <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="charts-morris.html">Morris Chart</a></li>
                            <li><a href="charts-chartist.html">Chartist Chart</a></li>
                            <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                            <li><a href="charts-flot.html">Flot Chart</a></li>
                            <li><a href="charts-c3.html">C3 Chart</a></li>
                            <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-view-thumb"></i><span>
                                Tables <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-datatable.html">Data Table</a></li>
                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                            <li><a href="tables-editable.html">Editable Table</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-map"></i><span> Maps
                                <span class="badge badge-pill badge-danger float-right">2</span></span></a>
                        <ul class="submenu">
                            <li><a href="maps-google.html">Google Map</a></li>
                            <li><a href="maps-vector.html">Vector Map</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Extras</li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-archive"></i><span>
                                Advanced UI <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="advanced-animation.html">Animation</a></li>
                            <li><a href="advanced-highlight.html">Highlight</a></li>
                            <li><a href="advanced-rating.html">Rating</a></li>
                            <li><a href="advanced-nestable.html">Nestable</a></li>
                            <li><a href="advanced-alertify.html">Alertify</a></li>
                            <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                            <li><a href="advanced-sessiontimeout.html">Session Timeout</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-box"></i><span>
                                Authentication <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="pages-login.html">Login</a></li>
                            <li><a href="pages-register.html">Register</a></li>
                            <li><a href="pages-recoverpw.html">Recover Password</a></li>
                            <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-duplicate"></i><span>
                                Extra Pages <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="pages-timeline.html">Timeline</a></li>
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-directory.html">Directory</a></li>
                            <li><a href="pages-blank.html">Blank Page</a></li>
                            <li><a href="pages-404.html">Error 404</a></li>
                            <li><a href="pages-500.html">Error 500</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- Sidebar -->
            <div class="clearfix"></div>
        </div><!-- Sidebar -left -->
    </div><!-- Left Sidebar End -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title mb-0">Dashboard</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#">Foxia</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
