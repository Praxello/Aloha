<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Modals | ThemeKit - Admin Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../../favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
     <link rel="stylesheet" href="plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/css/theme.min.css">
    <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
     <link rel="stylesheet" href="plugins/jquery-minicolors/jquery.minicolors.css">
        <link rel="stylesheet" href="plugins/datedropper/datedropper.min.css">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="wrapper">
        <!-- <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <div class="header-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                                </div>
                            </div>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>
                        <div class="top-menu d-flex align-items-center">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i><span class="badge bg-danger">3</span></a>
                                <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                                    <h4 class="header">Notifications</h4>
                                    <div class="notifications-wrap">
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-check"></i> 
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">Invitation accepted</span> 
                                                <span class="media-content">Your have been Invited ...</span>
                                            </span>
                                        </a>
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <img src="../../img/users/1.jpg" class="rounded-circle" alt="">
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">Steve Smith</span> 
                                                <span class="media-content">I slowly updated projects</span>
                                            </span>
                                        </a>
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-calendar"></i> 
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">To Do</span> 
                                                <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="footer"><a href="javascript:void(0);">See all activity</a></div>
                                </div>
                            </div>
                            <button type="button" class="nav-link ml-10 right-sidebar-toggle"><i class="ik ik-message-square"></i><span class="badge bg-success">3</span></button>
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-plus"></i></a>
                                <div class="dropdown-menu dropdown-menu-right menu-grid" aria-labelledby="menuDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Dashboard"><i class="ik ik-bar-chart-2"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Message"><i class="ik ik-mail"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Accounts"><i class="ik ik-users"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Sales"><i class="ik ik-shopping-cart"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Purchase"><i class="ik ik-briefcase"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Pages"><i class="ik ik-clipboard"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Chats"><i class="ik ik-message-square"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Contacts"><i class="ik ik-map-pin"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Blocks"><i class="ik ik-inbox"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Events"><i class="ik ik-calendar"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Notifications"><i class="ik ik-bell"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="More"><i class="ik ik-more-horizontal"></i></a>
                                </div>
                            </div>
                            <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></button>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="../../img/user.jpg" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="../profile.html"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="ik ik-mail dropdown-icon"></i> Inbox</a>
                                    <a class="dropdown-item" href="#"><i class="ik ik-navigation dropdown-icon"></i> Message</a>
                                    <a class="dropdown-item" href="../login.html"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header> -->

        <div class="page-wrap">
            <!-- <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="index.html">
                            <div class="logo-img">
                               <img src="../../src/img/brand-white.svg" class="header-brand-img" alt="lavalite"> 
                            </div>
                            <span class="text">ThemeKit</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Navigation</div>
                                <div class="nav-item">
                                    <a href="../../index.html"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="../../navbar.html"><i class="ik ik-menu"></i><span>Navigation</span> <span class="badge badge-success">New</span></a>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Widgets</span> <span class="badge badge-danger">150+</span></a>
                                    <div class="submenu-content">
                                        <a href="widgets.html" class="menu-item">Basic</a>
                                        <a href="widget-statistic.html" class="menu-item">Statistic</a>
                                        <a href="widget-data.html" class="menu-item">Data</a>
                                        <a href="widget-chart.html" class="menu-item">Chart Widget</a>
                                    </div>
                                </div>
                                <div class="nav-lavel">UI Element</div>
                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-box"></i><span>Basic</span></a>
                                    <div class="submenu-content">
                                        <a href="alerts.html" class="menu-item">Alerts</a>
                                        <a href="badges.html" class="menu-item">Badges</a>
                                        <a href="buttons.html" class="menu-item">Buttons</a>
                                        <a href="navigation.html" class="menu-item">Navigation</a>
                                    </div>
                                </div>
                                <div class="nav-item has-sub active open">
                                    <a href="#"><i class="ik ik-gitlab"></i><span>Advance</span> <span class="badge badge-success">New</span></a>
                                    <div class="submenu-content">
                                        <a href="modals.html" class="menu-item active">Modals</a>
                                        <a href="notifications.html" class="menu-item">Notifications</a>
                                        <a href="carousel.html" class="menu-item">Slider</a>
                                        <a href="range-slider.html" class="menu-item">Range Slider</a>
                                        <a href="rating.html" class="menu-item">Rating</a>
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-package"></i><span>Extra</span></a>
                                    <div class="submenu-content">
                                        <a href="session-timeout.html" class="menu-item">Session Timeout</a>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <a href="icons.html"><i class="ik ik-command"></i><span>Icons</span></a>
                                </div>
                                <div class="nav-lavel">Forms</div>
                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-edit"></i><span>Forms</span></a>
                                    <div class="submenu-content">
                                        <a href="../form-components.html" class="menu-item">Components</a>
                                        <a href="../form-addon.html" class="menu-item">Add-On</a>
                                        <a href="../form-advance.html" class="menu-item">Advance</a>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <a href="../form-picker.html"><i class="ik ik-terminal"></i><span>Form Picker</span> <span class="badge badge-success">New</span></a>
                                </div>

                                <div class="nav-lavel">Tables</div>
                                <div class="nav-item">
                                    <a href="../table-bootstrap.html"><i class="ik ik-credit-card"></i><span>Bootstrap Table</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="../table-datatable.html"><i class="ik ik-inbox"></i><span>Data Table</span></a>
                                </div>

                                <div class="nav-lavel">Charts</div>
                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-pie-chart"></i><span>Charts</span> <span class="badge badge-success">New</span></a>
                                    <div class="submenu-content">
                                        <a href="../charts-chartist.html" class="menu-item">Chartist</a>
                                        <a href="../charts-flot.html" class="menu-item">Flot</a>
                                        <a href="../charts-knob.html" class="menu-item">Knob</a>
                                        <a href="../charts-amcharts.html" class="menu-item">Amcharts</a>
                                    </div>
                                </div>

                                <div class="nav-lavel">Apps</div>
                                <div class="nav-item">
                                    <a href="../calendar.html"><i class="ik ik-calendar"></i><span>Calendar</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="../taskboard.html"><i class="ik ik-server"></i><span>Taskboard</span></a>
                                </div>

                                <div class="nav-lavel">Pages</div>

                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-lock"></i><span>Authentication</span></a>
                                    <div class="submenu-content">
                                        <a href="../login.html" class="menu-item">Login</a>
                                        <a href="../register.html" class="menu-item">Register</a>
                                        <a href="../forgot-password.html" class="menu-item">Forgot Password</a>
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-file-text"></i><span>Other</span></a>
                                    <div class="submenu-content">
                                        <a href="../profile.html" class="menu-item">Profile</a>
                                        <a href="../invoice.html" class="menu-item">Invoice</a>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <a href="../layouts.html"><i class="ik ik-layout"></i><span>Layouts</span><span class="badge badge-success">New</span></a>
                                </div>
                                <div class="nav-lavel">Other</div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Menu Levels</span></a>
                                    <div class="submenu-content">
                                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.1</a>
                                        <div class="nav-item has-sub">
                                            <a href="javascript:void(0)" class="menu-item">Menu Level 2.2</a>
                                            <div class="submenu-content">
                                                <a href="javascript:void(0)" class="menu-item">Menu Level 3.1</a>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.3</a>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <a href="javascript:void(0)" class="disabled"><i class="ik ik-slash"></i><span>Disabled Menu</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="javascript:void(0)"><i class="ik ik-award"></i><span>Sample Page</span></a>
                                </div>
                                <div class="nav-lavel">Support</div>
                                <div class="nav-item">
                                    <a href="javascript:void(0)"><i class="ik ik-monitor"></i><span>Documentation</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="javascript:void(0)"><i class="ik ik-help-circle"></i><span>Submit Issue</span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div> -->
            <div class="main-content">
                <div class="container-fluid">
                    <!-- <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-box bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Modals</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">UI</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Advanced</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Modals</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div> -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Modals</h3>
                                </div>
                                <div class="card-body template-demo">
                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demoModal">Launch Demo Modal</button>
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalLong">Scrolling Long Content</button>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Vertically Centered</button> -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#fullwindowModal">Full Window</button>
                                </div>
                            </div>
                            <!-- <div class="card">
                                    <div class="card-header"><h3>Default Modal</h3></div>
                                    <div class="card-body">
                                        <div class="modal-dialog mt-0 mb-0" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Modal body text goes here.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary">Save changes</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header"><h3>Large Modal</h3></div>
                                    <div class="card-body">
                                        <div class="modal-dialog modal-lg mt-0 mb-0" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Modal body text goes here.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary">Save changes</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header"><h3>Small Modal</h3></div>
                                    <div class="card-body">
                                        <div class="modal-dialog modal-sm mt-0 mb-0" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Modal body text goes here.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary">Save changes</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                    </div>

                    <!-- <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="demoModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                    ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                    ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    <div class="modal fade full-window-modal" id="fullwindowModal" tabindex="-1" role="dialog"
                        aria-labelledby="fullwindowModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: aliceblue;">
                                    <h5 class="modal-title" id="fullwindowModalLabel"><strong>Lab Test Report</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">


                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: aliceblue;">
                                                      <!--   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3><span><strong>Name :</strong>Prasad</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        	<span><strong>BIK/Male</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <span><strong>Age:</strong>26</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span><strong>Height:</strong>0</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span><strong>Weight:</strong>0</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span><strong>Type:</strong>Urban</span></h3> -->

                                                   <div class="row col-md-12">
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                   <h3> <strong><label for="">Name :&nbsp;&nbsp;</label></strong><span>Prasad</span>&nbsp;&nbsp;<strong>BIK/Male</strong></h3>
                                                                 </div>
                                                            </div>
                                                             <div class="col-md-1">
                                                                <div class="form-group">
                                                                     <h3> <strong><label for="">Age:</label></strong><span>26</span></h3>
                                                                 </div>
                                                            </div>
                                                              <div class="col-md-1">
                                                                <div class="form-group">
                                                                     <h3> <strong><label for="">Height:</label></strong><span>0</span></h3>
                                                                 </div>
                                                            </div>
                                                              <div class="col-md-1">
                                                                <div class="form-group">
                                                                     <h3> <strong><label for="">Weight:</label></strong><span>0</span></h3>
                                                                 </div>
                                                            </div>

                                                            <!--  <div class="col-md-1">
                                                                <div class="form-group">
                                                                     <h3> <strong><label for="">Type:</label></strong><span>Urban</span></h3>
                                                                 </div>
                                                            </div> -->

                                                              <div class="col-md-1 ml-auto">
                                                                <div class="form-group">
                                                                     <h3> <strong><label for="">Date:</label></strong></h3>
                                                                 </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <div class="form-group">
                                                                   <!-- <input type="date" name="testDate" class="form-control"> -->
                                                                       <input id="dropper-default" class="form-control" type="text" placeholder="Select your date" />
                                                                 </div>
                                                            </div>
                                                   	
                                                   </div>
                                                    </div>
                                                    <div class="card-body">
                                                    	<div class="row">
                                                    	<!--  <div class="col-md-6">
                                                    <div class="form-group">
                                                    	   <div class="dt-responsive">
                                            <table id="testNames"
                                                   class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    <th> Test Name</th>
                                                    
                                                </tr>
                                                </thead>																																																																																						
                                                <tbody>
                                              
                                                <tr>
                                                    <td>ESR</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>HAEMATOLOGY</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>COAGULATION PROFILE</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>DIABETIC PROFILE</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>OTHER ENZYMES AND PROTEINS</td>
                                                  
                                                </tr>
                                                <tr>
                                                    <td>RFT</td>
                                                  
                                                </tr>
                                                <tr>
                                                    <td>IONS AND TRACE METALS</td>
                                                   
                                                </tr>
                                                
                                            </tbody>
                                               
                                            </table>
                                        </div>
                                    </div>
                                </div> -->
                                                  
                                                  <!-- <div class="col-md-1">
                                                  </div>    --> 
                                        <div class="col-md-1">
                                                          <div class="form-group">
                                                    	   <div class="">
                                            <table id=""
                                                   class="table table-responsive">
                                                <thead>
                                                <tr>
                                                    <th> Date</th>
                                                    
                                                </tr>
                                                </thead>																																																																																						
                                                <tbody>
                                              
                                                <tr>
                                                    <td>2019-11-20</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>2019-11-20</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>2019-11-20</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>2019-11-20</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>2019-11-25</td>
                                                  
                                                </tr>
                                                <tr>
                                                    <td>2019-11-30</td>
                                                  
                                                </tr>
                                                <tr>
                                                    <td>2019-11-31</td>
                                                   
                                                </tr>
                                                
                                            </tbody>
                                               
                                            </table>
                                        </div>
                                    </div>
                                     </div>



                                      <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: aliceblue;">
                                                        <h3><strong>Investigations/Lab Reports</strong></h3>
                                                    </div>
                                                    <div class="card-body">                                                        
                                                        <div class="table-responsive">
                                         <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                   <th>Test</th>
                                                                    <th>2019-12-27</th>
                                                                   
                                                              </tr>
                                                                  </thead>
                                                                           <tbody>
                                                                                  <tr>
                                                                                 <td>ANEMIA PROFILE Iron profileTransfer in satuation</td>
                                                                                 <td>jkjkj</td>
                                                                               
                                                                              </tr>
                                                                              <tr>
                                                                                   <td>IONS AND TRACE METALS Sr.Magnesium</td>
                                                                                   <td>dsds</td>
                                                                                 
                                                                            </tr>
                                                                         
                                                                    </tbody>
                                                            </table>
                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                                <div class="col-md-7">
                                                <div class="card">
                                                      <div class="card-header" style="background-color: aliceblue;">
                                                        <h3><strong>General Condition</strong></h3>
                                                    </div>
                                        <div class="card-body">  
                                        <div class="row col-md-12 mb-20">                                                      
                                                <div class="col-md-2">
                                                                <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>Healthy</span>
                                                    </label>
                                                    </div>
                                                </div>

                                    <div class="col-md-2">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>lll</span>
                                                    </label>
                                                    </div>
                                     </div>


                                      <div class="col-md-2">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>Toxic</span>
                                                    </label>
                                                    </div>
                                     </div>


                                      <div class="col-md-3">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>ChaChexia</span>
                                                    </label>
                                                    </div>
                                     </div>


                                      <div class="col-md-2">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>Afeb</span>
                                                    </label>
                                                    </div>
                                     </div>
                                 </div>

                                 


                                       <div class="row col-md-12 mb-20">                                                      
                                                <div class="col-md-2">
                                                                <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>feb</span>
                                                    </label>
                                                    </div>
                                                </div>

                                    <div class="col-md-2">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>Pallor</span>
                                                    </label>
                                                    </div>
                                     </div>


                                      <div class="col-md-2">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>Ede</span>
                                                    </label>
                                                    </div>
                                     </div>


                                      <div class="col-md-3">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>Icte</span>
                                                    </label>
                                                    </div>
                                     </div>


                                      <div class="col-md-2">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>Cushin</span>
                                                    </label>
                                                    </div>
                                     </div>

                                   
                                     </div>


                                     <div class="row col-md-12">

                                        <div class="col-md-2">
                                                                <div class="form-group">
                                                                      <strong><label for="">Weight :</label></strong>
                                                                 </div>
                                         </div>


                                            <div class="col-md-2">
                                                        <div class="form-group">
                                                          <span>0</span>
                                                         </div>
                                          </div>

                                         <div class="col-md-2">
                                          <strong><label for="">
                                            Temp :
                                             </label></strong>
                                         </div>

                                         <div class="col-md-6">
                                             <input type="text" name="temp"><span>&nbsp;&nbsp;degree/F</span>
                                         </div>

                                     </div>


                                     <div class="row col-sm-12 form-group">

                                                <button type="button" class="btn btn-warning pull-right "><i class="ik ik-heart ik-1x"></i> ASCVD Assesment</button>
                                            </div>


                                            <div class="row col-md-6 form-group">

                                                  <textarea placeholder="Remark" class="form-control" name="remark"></textarea>
                                                                                                                                                                                                                                                                
                                              </div>



                                                </div>
                                            </div>                                                                                                                                                                                                          
                                            </div>

                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                   <!--  <div class="container-fluid">
                                        <div class="row">
                                             <div class="col-md-2"></div> -->
                                            <!-- <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: aliceblue;">
                                                        <h3><strong>General Condition</strong></h3>
                                                    </div>
                                        <div class="card-body">  
                                        <div class="row col-md-12">                                                      
                                                <div class="col-md-2">
                                                                <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>Healthy</span>
                                                    </label>
                                                    </div>
                                                </div>

                                    <div class="col-md-2">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>lll</span>
                                                    </label>
                                                    </div>
                                     </div>


                                      <div class="col-md-2">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>Toxic</span>
                                                    </label>
                                                    </div>
                                     </div>


                                      <div class="col-md-3">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>ChaChexia</span>
                                                    </label>
                                                    </div>
                                     </div>


                                      <div class="col-md-2">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>Afeb</span>
                                                    </label>
                                                    </div>
                                     </div>
                                 </div>

                                 


                                       <div class="row col-md-12">                                                      
                                                <div class="col-md-2">
                                                                <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>feb</span>
                                                    </label>
                                                    </div>
                                                </div>

                                    <div class="col-md-2">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>Pallor</span>
                                                    </label>
                                                    </div>
                                     </div>


                                      <div class="col-md-2">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>Ede</span>
                                                    </label>
                                                    </div>
                                     </div>


                                      <div class="col-md-3">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>Icte</span>
                                                    </label>
                                                    </div>
                                     </div>


                                      <div class="col-md-2">
                                                  <div class="checkbox-fade fade-in-success">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr">
                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                        </span>
                                                        <span>Cushin</span>
                                                    </label>
                                                    </div>
                                     </div>

                                   
                                     </div>


                                     <div class="row col-md-12">

                                        <div class="col-md-2">
                                                                <div class="form-group">
                                                                      <strong><label for="">Weight :</label></strong>
                                                                 </div>
                                         </div>


                                            <div class="col-md-2">
                                                        <div class="form-group">
                                                          <span>0</span>
                                                         </div>
                                          </div>

                                         <div class="col-md-2">
                                          <strong><label for="">
                                            Temp :
                                             </label></strong>
                                         </div>

                                         <div class="col-md-6">
                                             <input type="text" name="temp"><span>degree/F</span>
                                         </div>

                                     </div>


                                     <div class="row col-sm-12 form-group">

                                                <button type="button" class="btn btn-success pull-right "><i class="ik ik-heart ik-1x"></i> ASCVD Assesment</button>
                                            </div>


                                            <div class="row col-md-6 form-group">

                                                  <textarea placeholder="Remark" class="form-control" name="remark"></textarea>
                                                                                                                                                                                                                                                                
                                              </div>



                                                </div>
                                            </div>



                                        

                                    </div>
 -->
 
                             
                                    

                             

 						





                                     <!--    <div class="card">
                                            <div class="card-header">
                                                <h3 class="d-block w-100"><strong>Information<small
                                                            class="float-right">Date: 01/01/2020</strong></small></h3>
                                            </div>
                                            <div class="card-body"> -->
                                                <!-- <div class="row invoice-info">
                                                        <div class="col-sm-4 invoice-col">
                                                            From
                                                            <address>
                                                                <strong>ThemeKit,</strong><br>795 Folsom Ave, Suite 546 <br>San Francisco, CA 54656 <br>Phone: (123) 123-4567<br>Email: info@themekit.com
                                                            </address>
                                                        </div>
                                                        <div class="col-sm-4 invoice-col">
                                                            To
                                                            <address>
                                                                <strong>John Doe</strong><br>795 Folsom Ave, Suite 600<br>San Francisco, CA 94107<br>Phone: (555) 123-7654<br>Email: john.doe@example.com
                                                            </address>
                                                        </div>
                                                        <div class="col-sm-4 invoice-col">
                                                            <b>Invoice #007612</b><br>
                                                            <br>
                                                            <b>Order ID:</b> 4F3S8J<br>
                                                            <b>Payment Due:</b> 2/22/2014<br>
                                                            <b>Account:</b> 968-34567
                                                        </div>
                                                    </div> -->
<!-- 
                                                <div class="row">
                                                    <div class="col-md-6">
                                                                    <form class="sample-form">
                                                                        <div class="form-group">
                                                                            <label for="">Surgical History</label>
                                                                            <select class="form-control select2">
                                                                                <option value="cheese">Option 1</option>
                                                                                <option value="tomatoes">Option 2</option>
                                                                                <option value="mozarella">Option 3</option>
                                                                                <option value="mushrooms">Option 4</option>
                                                                                <option value="pepperoni">Option 5</option>
                                                                                <option value="onions">Option 6</option>
                                                                            </select>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="">Like</label>
                                                                            <input type="text" placeholder="likes"
                                                                                class="form-control" name="like"
                                                                                id="like">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="">Dislike</label>
                                                                            <input type="text" placeholder="dislikes"
                                                                                class="form-control" name="dislike"
                                                                                id="dislike">
                                                                        </div>
                                                                    </div> -->
                                                               
                                                    <!-- <div class="col-12 table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Qty</th>
                                                                    <th>Medicine</th>
                                                                    <th>Serial #</th>
                                                                    <th>Description</th>
                                                                    <th>Subtotal</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Medicine 1</td>
                                                                    <td>455-981-221</td>
                                                                    <td>Medicine 1-0-1</td>
                                                                    <td>$64.50</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Medicine 2</td>
                                                                    <td>247-925-726</td>
                                                                    <td>Medicine 1-0-0 </td>
                                                                    <td>$50.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Medicine 3</td>
                                                                    <td>735-845-642</td>
                                                                    <td>Medicine 0-0-1</td>
                                                                    <td>$10.70</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Medicine 4</td>
                                                                    <td>422-568-642</td>
                                                                    <td>Medicine 1-1-1</td>
                                                                    <td>$25.99</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div> -->
                                               <!--  </div> -->

                                                <!-- <div class="row"> -->
                                                    <!-- <div class="col-6">
                                                            <p class="lead">Payment Methods:</p>
                                                            <img src="../img/credit/visa.png" alt="Visa">
                                                            <img src="../img/credit/mastercard.png" alt="Mastercard">
                                                            <img src="../img/credit/american-express.png" alt="American Express">
                                                            <img src="../img/credit/paypal2.png" alt="Paypal">
                                                            
                                                            <div class="alert alert-secondary mt-20">
                                                              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                                            </div>
                                                        </div> -->
                                                  <!--   <div class="col-sm-4">
                                                        <p class="lead"><strong>Amount Due 01/01/2020</strong></p>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tr>
                                                                    <th style="width:50%">Subtotal:</th>
                                                                    <td>$250.30</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tax (9.3%)</th>
                                                                    <td>$10.34</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Shipping:</th>
                                                                    <td>$5.80</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Total:</th>
                                                                    <td>$265.24</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            <!--     <div class="row no-print">
                                                    <div class="col-12">
                                                        <button type="button" class="btn btn-success pull-right"><i
                                                                class="fa fa-credit-card"></i> Generate Bill</button>
                                                        <button type="button" class="btn btn-primary pull-right"
                                                            style="margin-right: 5px;"><i class="fa fa-download"></i>
                                                            Generate PDF</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="address">Remark</label>
                                                            <textarea name="address" rows="3"
                                                                class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                    <!-- </div> -->
                                    <div class="modal-footer" style="margin-top: 280px">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <aside class="right-sidebar">
                    <div class="sidebar-chat" data-plugin="chat-sidebar">
                        <div class="sidebar-chat-info">
                            <h6>Chat List</h6>
                            <form class="mr-t-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search for friends ..."> 
                                    <i class="ik ik-search"></i>
                                </div>
                            </form>
                        </div>
                        <div class="chat-list">
                            <div class="list-group row">
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Gene Newman">
                                    <figure class="user--online">
                                        <img src="../../img/users/1.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Gene Newman</span>  <span class="username">@gene_newman</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Billy Black">
                                    <figure class="user--online">
                                        <img src="../../img/users/2.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Billy Black</span>  <span class="username">@billyblack</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Herbert Diaz">
                                    <figure class="user--online">
                                        <img src="../../img/users/3.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Herbert Diaz</span>  <span class="username">@herbert</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Sylvia Harvey">
                                    <figure class="user--busy">
                                        <img src="../../img/users/4.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Sylvia Harvey</span>  <span class="username">@sylvia</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item active" data-chat-user="Marsha Hoffman">
                                    <figure class="user--busy">
                                        <img src="../../img/users/5.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Marsha Hoffman</span>  <span class="username">@m_hoffman</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Mason Grant">
                                    <figure class="user--offline">
                                        <img src="../../img/users/1.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Mason Grant</span>  <span class="username">@masongrant</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Shelly Sullivan">
                                    <figure class="user--offline">
                                        <img src="../../img/users/2.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Shelly Sullivan</span>  <span class="username">@shelly</span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>

                <div class="chat-panel" hidden>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>  
                            <span class="user-name">John Doe</span> 
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="card-body">
                            <div class="widget-chat-activity flex-1">
                                <div class="messages">
                                    <div class="message media reply">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="../../img/users/3.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>Epic Cheeseburgers come in all kind of styles.</p>
                                        </div>
                                    </div>
                                    <div class="message media">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="../../img/users/1.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>Cheeseburgers make your knees weak.</p>
                                        </div>
                                    </div>
                                    <div class="message media reply">
                                        <figure class="user--offline">
                                            <a href="#">
                                                <img src="../../img/users/5.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>Cheeseburgers will never let you down.</p>
                                            <p>They'll also never run around or desert you.</p>
                                        </div>
                                    </div>
                                    <div class="message media">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="../../img/users/1.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>A great cheeseburger is a gastronomical event.</p>
                                        </div>
                                    </div>
                                    <div class="message media reply">
                                        <figure class="user--busy">
                                            <a href="#">
                                                <img src="../../img/users/5.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
                                        </div>
                                    </div>
                                    <div class="message media">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="../../img/users/1.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>If you are a vegan, we are sorry for you loss.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="javascript:void(0)" class="card-footer" method="post">
                            <div class="d-flex justify-content-end">
                                <textarea class="border-0 flex-1" rows="1" placeholder="Type your message here"></textarea>
                                <button class="btn btn-icon" type="submit"><i class="ik ik-arrow-right text-success"></i></button>
                            </div>
                        </form>
                    </div>
                </div> -->
                <!-- <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © 2018 ThemeKit v2.0. All Rights Reserved.</span>
                        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark" target="_blank">Lavalite</a></span>
                    </div>
                </footer> -->
            </div>
        </div>




        <!-- <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="quick-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <div class="input-wrap">
                                        <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                        <i class="ik ik-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="container">
                            <div class="apps-wrap">
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         -->
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="plugins/screenfull/dist/screenfull.js"></script>
        <script src="dist/js/theme.min.js"></script>
        <script src="plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
          <script src="js/datatables.js"></script>

          <script src="plugins/jquery-minicolors/jquery.minicolors.min.js"></script>
        <script src="plugins/datedropper/datedropper.min.js"></script>
        
        <script src="js/form-picker.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>

               $('#testNames').DataTable();
               // alert('its work');
        </script>
</body>

</html>