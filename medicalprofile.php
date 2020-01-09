<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Modals | ThemeKit - Admin Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="dist/css/theme.min.css">
    <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>

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
                                        data-target="#fullwindowModal">Add Medical Information</button>
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
                                    <h5 class="modal-title" id="fullwindowModalLabel"><strong>Medical Profile</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">


                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">                                                 
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-12 mb-30">
                                                                <h4 class="sub-title" style="background-color: aliceblue;"><strong>Diet Pattern</strong></h4>
                                                                <div class="checkbox-fade fade-in-success">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                                        </span>
                                                                        <span>Vegetarian</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-fade fade-in-success">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                                        </span>
                                                                        <span>Non-vegetarian</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-fade fade-in-success">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                                        </span>
                                                                        <span>Mixed</span>
                                                                    </label>
                                                                </div>                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                           
                                                           
                                                            <div class="col-sm-12 col-xl-12">
                                                                <h4 class="sub-title"><strong>Addicted To</strong></h4>
                                                                <div class="form-group row">
                                                                    <label for="exampleInputUsername2" class="col-sm-1 col-form-label">
                                                                        <div class="checkbox-fade fade-in-success">
                                                                            <label>
                                                                                <input type="checkbox" value="">
                                                                                <span class="cr">
                                                                                    <i class="cr-icon ik ik-check txt-success"></i>
                                                                                </span>
                                                                                <span>Smoke</span>
                                                                            </label>
                                                                        </div>
                                                                    </label>
                                                                    <div class="col-sm-1">
                                                                        <input type="text" class="form-control" name="year1" id="year1" placeholder="1 year">
                                                                    </div>
                                                                    <div class="col-sm-1">                                                                    
                                                                        <input type="text" class="form-control" name="month1" id="month1" placeholder="5 month">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-12">                                                             
                                                                <div class="form-group row">
                                                                    <label for="exampleInputUsername2" class="col-sm-1 col-form-label">
                                                                        <div class="checkbox-fade fade-in-success">
                                                                            <label>
                                                                                <input type="checkbox" value="">
                                                                                <span class="cr">
                                                                                    <i class="cr-icon ik ik-check txt-success"></i>
                                                                                </span>
                                                                                <span>Tobacco</span>
                                                                            </label>
                                                                        </div>
                                                                    </label>
                                                                    <div class="col-sm-1">
                                                                        <input type="text" class="form-control" name="year2" id="year2" placeholder="1 year">
                                                                    </div>
                                                                    <div class="col-sm-1">                                                                      
                                                                        <input type="text" class="form-control" name="month2" id="month2" placeholder="5 month">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-12">                                                              
                                                                <div class="form-group row">
                                                                    <label for="exampleInputUsername2" class="col-sm-1 col-form-label">
                                                                        <div class="checkbox-fade fade-in-success">
                                                                            <label>
                                                                                <input type="checkbox" value="">
                                                                                <span class="cr">
                                                                                    <i class="cr-icon ik ik-check txt-success"></i>
                                                                                </span>
                                                                                <span>Alcohol</span>
                                                                            </label>
                                                                        </div>
                                                                    </label>
                                                                    <div class="col-sm-1">
                                                                        <input type="text" class="form-control" name="year3" id="year3" placeholder="1 year">
                                                                    </div>
                                                                    <div class="col-sm-1">                                                                     
                                                                        <input type="text" class="form-control" name="month3" id="month3" placeholder="5 month">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-12">
                                                            
                                                                <div class="form-group row">
                                                                    <label for="exampleInputUsername2" class="col-sm-1 col-form-label">
                                                                        <div class="checkbox-fade fade-in-success">
                                                                            <label>
                                                                                <input type="checkbox" value="">
                                                                                <span class="cr">
                                                                                    <i class="cr-icon ik ik-check txt-success"></i>
                                                                                </span>
                                                                                <span>Others</span>
                                                                            </label>
                                                                        </div>
                                                                    </label>                                                                   
                                                                    <div class="col-sm-2">                                                                      
                                                                        <select class="form-control select2">
                                                                            <option value="cheese">Option 1</option>
                                                                            <option value="tomatoes">Option 2</option>
                                                                            <option value="mozarella">Option 3</option>
                                                                            <option value="mushrooms">Option 4</option>
                                                                            <option value="pepperoni">Option 5</option>
                                                                            <option value="onions">Option 6</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>                                                            
                                                        </div>                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">                                                  
                                                    <div class="card-body"> 
                                                        <div class="row">
                                                            <div class="col-sm-2 mb-10">
                                                                
                                                                <div class="checkbox-fade fade-in-success class" style="margin-right: -89px;">
                                                                    <h5><strong>Allergy To Any Drug</strong></h5><br>
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                                        </span>
                                                                        <span>Yes</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-fade fade-in-success">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                                        </span>
                                                                        <span>No</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                                <div class="col-sm-3 mb-10">
                                                                    <label for="remark">Remarks</label>
                                                                       <textarea name="remark" id="remark" rows="3" class="form-control"></textarea>                                                                                                                                                                                                   
                                                            </div>
                                                            
                                                            <div class="cal-sm-2" style="margin-left: 80px;"></div>

                                                            <div class="col-sm-2 mb-10">                                                                
                                                                <div class="checkbox-fade fade-in-success class" style="margin-right: -30px;">
                                                                    <h5><strong>Menstrual History</strong></h5><br>
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                                        </span>
                                                                        <span>Regular</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-fade fade-in-success">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                                        </span>
                                                                        <span>Irregular</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                                <div class="col-sm-3 mb-10">
                                                                    <label for="remark">Remarks</label>
                                                                       <textarea name="remark" id="remark" rows="3" class="form-control"></textarea>
                                                                </div>
                                                        </div>                                                      
                                                                                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card" >
                                                    <div class="card-header" style="background-color: aliceblue;">
                                                        <h5><strong>Obstetics History</strong></h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row mb-20" style="text-align: center;">                                                        
                                                            <div class="col-md-1">
                                                                <div class="form-group" style="text-align: center;">
                                                                    <label for="">(G)</label>
                                                                    <input type="text" placeholder=""
                                                                        class="form-control" name="g"
                                                                        id="g">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <div class="form-group">
                                                                    <label for="">(P)</label>
                                                                    <input type="text" placeholder=""
                                                                        class="form-control" name="p"
                                                                        id="p">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <div class="form-group">
                                                                    <label for="">(A)</label>
                                                                    <input type="text" placeholder=""
                                                                        class="form-control" name="a"
                                                                        id="a">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <div class="form-group">
                                                                    <label for="">(L)</label>
                                                                    <input type="text" placeholder=""
                                                                        class="form-control" name="l"
                                                                        id="l">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1"></div>
                                                            <div class="col-md-1">
                                                                <div class="form-group">
                                                                    <label for="">No. Of Male</label>
                                                                    <select class="form-control select2">
                                                                        <option value="cheese"> 1</option>
                                                                        <option value="tomatoes"> 2</option>
                                                                        <option value="mozarella"> 3</option>
                                                                        <option value="mushrooms"> 4</option>
                                                                        <option value="pepperoni"> 5</option>
                                                                        <option value="onions"> 6</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <div class="form-group">
                                                                    <label for="">No. Of Female</label>
                                                                    <select class="form-control select2">
                                                                        <option value="cheese"> 1</option>
                                                                        <option value="tomatoes"> 2</option>
                                                                        <option value="mozarella"> 3</option>
                                                                        <option value="mushrooms"> 4</option>
                                                                        <option value="pepperoni"> 5</option>
                                                                        <option value="onions"> 6</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5"></div>                                                          
                                                        </div>
                                                        <div class="row mb-30">
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label for="">LMP Date</label>
                                                                    <input type="text" placeholder="min year 2020" class="form-control" name="p" id="dropper-min-year">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">                                                               
                                                                    <label for="remark">Menopause</label>
                                                                       <textarea name="mark1" id="mark1" rows="3" class="form-control"></textarea>                                                                      
                                                            </div>
                                                            <div class="col-md-4">                                                               
                                                                    <label for="remark">Details Of Previous Prescription</label>
                                                                       <textarea name="mark2" id="mark2" rows="3" class="form-control"></textarea>                                                                      
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-sm-2 mb-10">
                                                                
                                                                <div class="checkbox-fade fade-in-success class" style="margin-right: -89px;">
                                                                    <h5><strong>Any Infectious Disease</strong></h5><br>
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                                        </span>
                                                                        <span>Yes</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-fade fade-in-success">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                                        </span>
                                                                        <span>No</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                                <div class="col-sm-3 mb-10">
                                                                    <label for="remark">Remarks</label>
                                                                       <textarea name="imark" id="imark" rows="3" class="form-control"></textarea>                                                                                                                                                                                                   
                                                            </div>
                                                            
                                                            <div class="cal-sm-2" style="margin-left: 80px;"></div>

                                                            <div class="col-sm-2 mb-10">                                                                
                                                                <div class="checkbox-fade fade-in-success class" style="margin-right: -30px;">
                                                                    <h5><strong>Blood Transfusion</strong></h5><br>
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                                        </span>
                                                                        <span>Yes</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-fade fade-in-success">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon ik ik-check txt-success"></i>
                                                                        </span>
                                                                        <span>No</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                                <div class="col-sm-3 mb-10">
                                                                    <label for="remark">Remarks</label>
                                                                       <textarea name="bmark" id="bmark" rows="3" class="form-control"></textarea>
                                                                </div>
                                                        </div>    
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                    <div class="row mt-20"> 
                                    <div class="col-md-12">
                                        <div class="card">                                         
                                            <div class="card-body">                                               
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5><strong>Family History In Blood Relation</strong></h5>             
                                                        <form class="form-inline repeater">
                                                            <div data-repeater-list="group-a">
                                                                <div data-repeater-item class="d-flex mb-2">
                                                                    <label class="sr-only" for="inlineFormInputGroup1">Users</label>
                                                                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">                                                            
                                                                        <input type="text" class="form-control" id="mdiseases" name="mdiseases" placeholder="Major Diseases">
                                                                    </div>
                                                                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                                                                        <input type="email" class="form-control" id="wmater" name="wmater" placeholder="Whom Mater">
                                                                    </div>
                                                                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                                                                        <input type="tel" class="form-control" id="odiseases" name="odiseases" placeholder="Other Diseases">
                                                                    </div>
                                                                     <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                                                                        <input type="tel" class="form-control" id="whommater" name="whommater" placeholder="Whom Mater">
                                                                    </div>
                                                                    <button data-repeater-delete type="button" class="btn btn-danger btn-icon ml-2" ><i class="ik ik-trash-2"></i></button>
                                                                </div>
                                                            </div>                                                        
                                                            <button data-repeater-create type="button" class="btn btn-success btn-icon ml-2 mb-2" ><i class="ik ik-plus" ></i></button>
                                                        </form>                                                                    
                                                    </div>

                                                     <div class="col-md-6">
                                                        <h5><strong>Surgery Detail</strong></h5>             
                                                        <form class="form-inline repeater">
                                                            <div data-repeater-list="group-a">
                                                                <div data-repeater-item class="d-flex mb-2">
                                                                    <label class="sr-only" for="inlineFormInputGroup1">Users</label>
                                                                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">                                                            
                                                                        <input type="text" class="form-control" id="surgery" name="surgery" placeholder="Surgery">
                                                                    </div>
                                                                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                                                                        <input type="email" class="form-control" id="time" name="time" placeholder="Time">
                                                                    </div>
                                                                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                                                                        <input type="tel" class="form-control" id="remark" name="remark" placeholder="Remark">
                                                                    </div>
                                                                    
                                                                    <button data-repeater-delete type="button" class="btn btn-danger btn-icon ml-2" ><i class="ik ik-trash-2"></i></button>
                                                                </div>
                                                            </div>                                                        
                                                            <button data-repeater-create type="button" class="btn btn-success btn-icon ml-2 mb-2" ><i class="ik ik-plus" ></i></button>
                                                        </form>                                                                    
                                                    </div>                                                                                                                       
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>

                                        <div class="card">                                        
                                            <div class="card-body">                                                                                          
                                                    <div class="row">                                                                                                                   
                                                        <div class="col-sm-12 col-xl-12">
                                                            <h4 class="sub-title"><strong>Addicted To</strong></h4>
                                                            <div class="form-group row">
                                                                <label for="exampleInputUsername2" class="col-sm-1 col-form-label">
                                                                    <div class="checkbox-fade fade-in-success">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon ik ik-check txt-success"></i>
                                                                            </span>
                                                                            <span>DIABETES</span>
                                                                        </label>
                                                                    </div>
                                                                </label>
                                                                <div class="col-sm-1">
                                                                    <input type="text" class="form-control" name="year1" id="year1" placeholder="1 year">
                                                                </div>
                                                                <div class="col-sm-1">                                                                   
                                                                    <input type="text" class="form-control" name="month1" id="month1" placeholder="5 month">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-xl-12">                                                           
                                                            <div class="form-group row">
                                                                <label for="exampleInputUsername2" class="col-sm-1 col-form-label">
                                                                    <div class="checkbox-fade fade-in-success">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon ik ik-check txt-success"></i>
                                                                            </span>
                                                                            <span>HTN</span>
                                                                        </label>
                                                                    </div>
                                                                </label>
                                                                <div class="col-sm-1">
                                                                    <input type="text" class="form-control" name="year2" id="year2" placeholder="1 year">
                                                                </div>
                                                                <div class="col-sm-1">                                                                   
                                                                    <input type="text" class="form-control" name="month2" id="month2" placeholder="5 month">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-xl-12">                                                            
                                                            <div class="form-group row">
                                                                <label for="exampleInputUsername2" class="col-sm-1 col-form-label">
                                                                    <div class="checkbox-fade fade-in-success">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon ik ik-check txt-success"></i>
                                                                            </span>
                                                                            <span>IHD</span>
                                                                        </label>
                                                                    </div>
                                                                </label>
                                                                <div class="col-sm-1">
                                                                    <input type="text" class="form-control" name="year3" id="year3" placeholder="1 year">
                                                                </div>
                                                                <div class="col-sm-1">                                                                    
                                                                    <input type="text" class="form-control" name="month3" id="month3" placeholder="5 month">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-xl-12">                                                          
                                                            <div class="form-group row">
                                                                <label for="exampleInputUsername2" class="col-sm-1 col-form-label">
                                                                    <div class="checkbox-fade fade-in-success">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon ik ik-check txt-success"></i>
                                                                            </span>
                                                                            <span>ASTHAMA</span>
                                                                        </label>
                                                                    </div>
                                                                </label>
                                                                <div class="col-sm-1">
                                                                    <input type="text" class="form-control" name="year4" id="year4" placeholder="1 year">
                                                                </div>
                                                                <div class="col-sm-1">                                                                   
                                                                    <input type="text" class="form-control" name="month4" id="month4" placeholder="5 month">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-xl-12">                                                          
                                                            <div class="form-group row">
                                                                <label for="exampleInputUsername2" class="col-sm-1 col-form-label">
                                                                    <div class="checkbox-fade fade-in-success">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon ik ik-check txt-success"></i>
                                                                            </span>
                                                                            <span>KD</span>
                                                                        </label>
                                                                    </div>
                                                                </label>
                                                                <div class="col-sm-1">
                                                                    <input type="text" class="form-control" name="year5" id="year5" placeholder="1 year">
                                                                </div>
                                                                <div class="col-sm-1">                                                                   
                                                                    <input type="text" class="form-control" name="month5" id="month5" placeholder="5 month">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-xl-12">                                                          
                                                            <div class="form-group row">
                                                                <label for="exampleInputUsername2" class="col-sm-1 col-form-label">
                                                                    <div class="checkbox-fade fade-in-success">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon ik ik-check txt-success"></i>
                                                                            </span>
                                                                            <span>CVA</span>
                                                                        </label>
                                                                    </div>
                                                                </label>
                                                                <div class="col-sm-1">
                                                                    <input type="text" class="form-control" name="year6" id="year6" placeholder="1 year">
                                                                </div>
                                                                <div class="col-sm-1">                                                                    
                                                                    <input type="text" class="form-control" name="month6" id="month6" placeholder="5 month">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-xl-12">                                                            
                                                            <div class="form-group row">
                                                                <label for="exampleInputUsername2" class="col-sm-1 col-form-label">
                                                                    <div class="checkbox-fade fade-in-success">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon ik ik-check txt-success"></i>
                                                                            </span>
                                                                            <span>APD</span>
                                                                        </label>
                                                                    </div>
                                                                </label>
                                                                <div class="col-sm-1">
                                                                    <input type="text" class="form-control" name="year7" id="year7" placeholder="1 year">
                                                                </div>
                                                                <div class="col-sm-1">                                                                   
                                                                    <input type="text" class="form-control" name="month7" id="month7" placeholder="5 month">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-xl-12">                                                           
                                                            <div class="form-group row">
                                                                <label for="exampleInputUsername2" class="col-sm-1 col-form-label">
                                                                    <div class="checkbox-fade fade-in-success">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon ik ik-check txt-success"></i>
                                                                            </span>
                                                                            <span>THYROID DYSFUNCTION</span>
                                                                        </label>
                                                                    </div>
                                                                </label>
                                                                <div class="col-sm-1">
                                                                    <input type="text" class="form-control" name="year8" id="year8" placeholder="1 year">
                                                                </div>
                                                                <div class="col-sm-1">                                                                    
                                                                    <input type="text" class="form-control" name="month8" id="month8" placeholder="5 month">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-xl-12">                                                           
                                                            <div class="form-group row">
                                                                <label for="exampleInputUsername2" class="col-sm-1 col-form-label">
                                                                    <div class="checkbox-fade fade-in-success">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr">
                                                                                <i class="cr-icon ik ik-check txt-success"></i>
                                                                            </span>
                                                                            <span>OTHERS</span>
                                                                        </label>
                                                                    </div>
                                                                </label>                                                              
                                                                <div class="col-sm-2">                                                                   
                                                                    <select class="form-control select2">
                                                                        <option value="cheese">Option 1</option>
                                                                        <option value="tomatoes">Option 2</option>
                                                                        <option value="mozarella">Option 3</option>
                                                                        <option value="mushrooms">Option 4</option>
                                                                        <option value="pepperoni">Option 5</option>
                                                                        <option value="onions">Option 6</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                           <label for="address"><h5><strong>Medicines</strong></h5><strong></strong> </label>
                                                           <textarea name="medicine" name="medicine" rows="4" class="form-control"></textarea>
                                                       </div>
                                                       </div>                                                                    
                                                </div>
                                            </div>
                                        </div>
                                            
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
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

        <script src="plugins/datedropper/datedropper.min.js"></script>
        <script src="js/form-picker.js"></script>
        <script src="plugins/moment/moment.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
                (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l; b[l] || (b[l] =
                    function () { (b[l].q = b[l].q || []).push(arguments) }); b[l].l = +new Date;
                    e = o.createElement(i); r = o.getElementsByTagName(i)[0];
                    e.src = 'https://www.google-analytics.com/analytics.js';
                    r.parentNode.insertBefore(e, r)
                }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto'); ga('send', 'pageview');
        </script>
</body>

</html>