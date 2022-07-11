<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Niche Admin - Powerful Bootstrap 4 Dashboard and Admin Template</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <!-- v4.0.0-alpha.6 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>dist/bootstrap/css/bootstrap.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/themify-icons/themify-icons.css">

    <!-- form wizard -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/plugins/formwizard/jquery-steps.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="index.html" class="logo blue-bg">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img src="<?php echo base_url('assets/') ?>dist/img/logo-n.png" alt=""></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="<?php echo base_url('assets/') ?>dist/img/logo.png" alt=""></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar blue-bg navbar-static-top">
                <!-- Sidebar toggle button-->
                <ul class="nav navbar-nav pull-left">
                    <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
                </ul>
                <div class="pull-left search-box">
                    <form action="#" method="get" class="search-form">
                        <div class="input-group">
                            <input name="search" class="form-control" placeholder="Search..." type="text">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
                            </span>
                        </div>
                    </form>
                    <!-- search form -->
                </div>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 new messages</li>
                                <li>
                                    <ul class="menu">
                                        <li><a href="#">
                                                <div class="pull-left"><img src="dist/img/img1.jpg" class="img-circle" alt="User Image"> <span class="profile-status online pull-right"></span></div>
                                                <h4>Alex C. Patton</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">9:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left"><img src="dist/img/img3.jpg" class="img-circle" alt="User Image"> <span class="profile-status offline pull-right"></span></div>
                                                <h4>Nikolaj S. Henriksen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">10:15 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left"><img src="dist/img/img2.jpg" class="img-circle" alt="User Image"> <span class="profile-status away pull-right"></span></div>
                                                <h4>Kasper S. Jessen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">8:45 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left"><img src="dist/img/img4.jpg" class="img-circle" alt="User Image"> <span class="profile-status busy pull-right"></span></div>
                                                <h4>Florence S. Kasper</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">12:15 AM</span></p>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Notifications</li>
                                <li>
                                    <ul class="menu">
                                        <li><a href="#">
                                                <div class="pull-left icon-circle red"><i class="icon-lightbulb"></i></div>
                                                <h4>Alex C. Patton</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">9:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left icon-circle blue"><i class="fa fa-coffee"></i></div>
                                                <h4>Nikolaj S. Henriksen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">1:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left icon-circle green"><i class="fa fa-paperclip"></i></div>
                                                <h4>Kasper S. Jessen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">9:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left icon-circle yellow"><i class="fa  fa-plane"></i></div>
                                                <h4>Florence S. Kasper</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">11:10 AM</span></p>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">Check all Notifications</a></li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="dist/img/img1.jpg" class="user-image" alt="User Image"> <span class="hidden-xs">Alexander Pierce</span> </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <div class="pull-left user-img"><img src="dist/img/img1.jpg" class="img-responsive" alt="User"></div>
                                    <p class="text-left">Florence Douglas <small>florence@gmail.com</small> </p>
                                    <div class="view-link text-left"><a href="#">View Profile</a> </div>
                                </li>
                                <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
                                <li><a href="#"><i class="icon-wallet"></i> My Balance</a></li>
                                <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <div class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="image text-center"><img src="dist/img/img1.jpg" class="img-circle" alt="User Image"> </div>
                    <div class="info">
                        <p>Alexander Pierce</p>
                        <a href="#"><i class="fa fa-cog"></i></a> <a href="#"><i class="fa fa-envelope-o"></i></a> <a href="#"><i class="fa fa-power-off"></i></a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">PERSONAL</li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="index.html">Dashboard 1</a></li>
                            <li><a href="index2.html">Dashboard 2</a></li>
                            <li><a href="index3.html">Dashboard 3</a></li>
                            <li><a href="index4.html">Dashboard 4</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Apps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="apps-calendar.html">Calendar</a></li>
                            <li><a href="apps-support-ticket.html">Support Ticket</a></li>
                            <li><a href="apps-contacts.html">Contact / Employee</a></li>
                            <li><a href="apps-contact-grid.html">Contact Grid</a></li>
                            <li><a href="apps-contact-details.html">Contact Detail</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-envelope-o "></i> <span>Inbox</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="apps-mailbox.html">Mailbox</a></li>
                            <li><a href="apps-mailbox-detail.html">Mailbox Detail</a></li>
                            <li><a href="apps-compose-mail.html">Compose Mail</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-briefcase"></i> <span>UI Elements</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="ui-cards.html" class="active">Cards</a></li>
                            <li><a href="ui-user-card.html">User Cards</a></li>
                            <li><a href="ui-tab.html">Tab</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-notification.html">Notification</a></li>
                            <li><a href="ui-progressbar.html">Progressbar</a></li>
                            <li><a href="ui-range-slider.html">Range slider</a></li>
                            <li><a href="ui-timeline.html">Timeline</a></li>
                            <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                            <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                            <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                            <li><a href="ui-list-media.html">List Media</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                        </ul>
                    </li>
                    <li class="header">FORMS, TABLE & WIDGETS</li>
                    <li class="active treeview"> <a href="#"> <i class="fa fa-edit"></i> <span>Forms</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li class="active"><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-layouts.html">Form Layouts</a></li>
                            <li><a href="form-uploads.html">Form File Upload</a></li>

                            <li><a href="form-summernote.html">Summernote</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-table"></i> <span>Tables</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="table-basic.html">Basic Tables</a></li>
                            <li><a href="table-layout.html">Table Layouts</a></li>
                            <li><a href="table-data-table.html">Data Tables</a></li>
                            <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-th"></i> <span>Widgets</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="widget-data.html">Data Widgets</a></li>
                            <li><a href="widget-apps.html">Apps Widgets</a></li>
                        </ul>
                    </li>
                    <li class="header">EXTRA COMPONENTS</li>
                    <li class="treeview"> <a href="#"><i class="fa fa-bar-chart"></i> <span>Charts</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-chartist.html">Chartis Chart</a></li>

                            <li><a href="chart-knob.html">Knob Chart</a></li>
                            <li><a href="chart-chart-js.html">Chartjs</a></li>
                            <li><a href="chart-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-files-o"></i> <span>Sample Pages</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="pages-blank.html">Blank page</a></li>
                            <li class="treeview"><a href="#">Authentication <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                                <ul class="treeview-menu">
                                    <li><a href="pages-login.html">Login 1</a></li>
                                    <li><a href="pages-login-2.html">Login 2</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-register2.html">Register 2</a></li>
                                    <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                    <li><a href="pages-recover-password.html">Recover password</a></li>
                                </ul>
                            </li>
                            <li><a href="pages-profile.html">Profile page</a></li>
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-treeview.html">Treeview</a></li>
                            <li><a href="pages-pricing.html">Pricing</a></li>
                            <li><a href="pages-gallery.html">Gallery</a></li>
                            <li><a href="pages-faq.html">Faqs</a></li>
                            <li><a href="pages-404.html">404 Error Page</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-map-marker"></i> <span>Maps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="map-google.html">Google Maps</a></li>
                            <li><a href="map-vector.html" class="active">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-paint-brush"></i> <span>Icons</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                            <li><a href="icon-themify.html">Themify Icons</a></li>
                            <li><a href="icon-linea.html">Linea Icons</a></li>
                            <li><a href="icon-weather.html">Weather Icons</a></li>
                            <li><a href="icon-simple-lineicon.html">Simple Lineicons</a></li>
                            <li><a href="icon-flag.html">Flag Icons</a></li>
                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-share"></i> <span>Multilevel</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="#">Level One</a></li>
                            <li class="treeview"> <a href="#">Level One <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"> Level Two</a></li>
                                    <li class="treeview"> <a href="#">Level Two <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                                        <ul class="treeview-menu">
                                            <li><a href="#">Level Three</a></li>
                                            <li><a href="#">Level Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Level One</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header sty-one">
                <h1 class="text-black">Form Wizard</h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="sub-bread"><i class="fa fa-angle-right"></i> Forms</li>
                    <li><i class="fa fa-angle-right"></i> Form Wizard</li>
                </ol>
            </div>

            <!-- Main content -->
            <div class="content">
                <div class="info-box">
                    <h4 class="text-black m-b-3">Step wizard</h4>
                    <div id="demo">
                        <div class="step-app">
                            <ul class="step-steps">
                                <li><a href="#step1"><span class="number">1</span> Personal Info</a></li>
                                <li><a href="#step2"><span class="number">2</span> Job Status</a></li>
                                <li><a href="#step3"><span class="number">3</span> Interview</a></li>
                                <li><a href="#step4"><span class="number">4</span> Remark</a></li>
                            </ul>
                            <div class="step-content">
                                <div class="step-tab-panel" id="step1">
                                    <form>
                                        <div class="row m-t-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName1">First Name:</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastName1">Last Name:</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName1">Email Address:</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastName1">Phone Number:</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="location1">Select City :</label>
                                                    <select class="custom-select form-control" id="location1" name="location">
                                                        <option value="">Select City</option>
                                                        <option value="Amsterdam">India</option>
                                                        <option value="Berlin">USA</option>
                                                        <option value="Frankfurt">Dubai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="date1">Date of Birth :</label>
                                                    <input class="form-control" id="date1" type="date">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="step-tab-panel" id="step2">
                                    <div class="row m-t-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jobTitle1">Job Title :</label>
                                                <input class="form-control" id="jobTitle1" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="videoUrl1">Company Name :</label>
                                                <input class="form-control" id="videoUrl1" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="shortDescription1">Job Description :</label>
                                                <textarea name="shortDescription" id="shortDescription1" rows="6" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step-tab-panel" id="step3">
                                    <div class="row m-t-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="int1">Interview For :</label>
                                                <input class="form-control" id="int1" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="intType1">Interview Type :</label>
                                                <select class="custom-select form-control" id="intType1" data-placeholder="Type to search cities" name="intType1">
                                                    <option value="Banquet">Normal</option>
                                                    <option value="Fund Raiser">Difficult</option>
                                                    <option value="Dinner Party">Hard</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Location1">Location :</label>
                                                <select class="custom-select form-control" id="Location1" name="location">
                                                    <option value="">Select City</option>
                                                    <option value="India">India</option>
                                                    <option value="USA">USA</option>
                                                    <option value="Dubai">Dubai</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jobTitle2">Interview Date :</label>
                                                <input class="form-control" id="jobTitle2" type="date">
                                            </div>
                                            <div class="form-group">
                                                <label>Requirements :</label>
                                                <div class="c-inputs-stacked">
                                                    <label class="inline custom-control custom-checkbox block">
                                                        <input class="custom-control-input" type="checkbox">
                                                        <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Employee</span> </label>
                                                    <label class="inline custom-control custom-checkbox block">
                                                        <input class="custom-control-input" type="checkbox">
                                                        <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Contract</span> </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step-tab-panel" id="step4">
                                    <div class="row m-t-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="behName1">Behaviour :</label>
                                                <input class="form-control" id="behName1" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="participants1">Confidance</label>
                                                <input class="form-control" id="participants1" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="participants1">Result</label>
                                                <select class="custom-select form-control" id="participants1" name="location">
                                                    <option value="">Select Result</option>
                                                    <option value="Selected">Selected</option>
                                                    <option value="Rejected">Rejected</option>
                                                    <option value="Call Second-time">Call Second-time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="decisions1">Comments</label>
                                                <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Rate Interviwer :</label>
                                                <div class="c-inputs-stacked">
                                                    <label class="inline custom-control custom-checkbox block">
                                                        <input class="custom-control-input" type="checkbox">
                                                        <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">1 star</span> </label>
                                                    <label class="inline custom-control custom-checkbox block">
                                                        <input class="custom-control-input" type="checkbox">
                                                        <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">2 star</span> </label>
                                                    <label class="inline custom-control custom-checkbox block">
                                                        <input class="custom-control-input" type="checkbox">
                                                        <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">3 star</span> </label>
                                                    <label class="inline custom-control custom-checkbox block">
                                                        <input class="custom-control-input" type="checkbox">
                                                        <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">4 star</span> </label>
                                                    <label class="inline custom-control custom-checkbox block">
                                                        <input class="custom-control-input" type="checkbox">
                                                        <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">5 star</span> </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step-footer">
                                <button data-direction="prev" class="btn btn-light">Previous</button>
                                <button data-direction="next" class="btn btn-primary">Next</button>
                                <button data-direction="finish" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    <hr class="m-t-5 m-b-5">
                    <h4 class="text-black m-b-3">Step Wizard with Validation</h4>
                    <div id="demo1">
                        <div class="step-app">
                            <ul class="step-steps">
                                <li><a href="#tab1"><span class="number">1</span> Personal Info</a></li>
                                <li><a href="#tab2"><span class="number">2</span> Job Status</a></li>
                                <li><a href="#tab3"><span class="number">3</span> Interview</a></li>
                                <li><a href="#tab4"><span class="number">4</span> Remark</a></li>
                            </ul>
                            <div class="step-content">
                                <div class="step-tab-panel" id="tab1">
                                    <form name="frmRes" id="frmRes">
                                        <div class="row m-t-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName1">First Name:</label>
                                                    <input class="form-control" type="text" name="firstname" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastName1">Last Name:</label>
                                                    <input class="form-control" type="text" name="lastname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName1">Email Address:</label>
                                                    <input class="form-control" type="text" name="email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastName1">Phone Number:</label>
                                                    <input class="form-control" type="text" name="phoneno" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="location1">Select City :</label>
                                                    <select class="custom-select form-control" id="location1" name="location">
                                                        <option value="">Select City</option>
                                                        <option value="Amsterdam">India</option>
                                                        <option value="Berlin">USA</option>
                                                        <option value="Frankfurt">Dubai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="date1">Date of Birth :</label>
                                                    <input class="form-control" id="date1" type="date">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="step-tab-panel" id="tab2">
                                    <h3>Tab2</h3>
                                    <form name="frmInfo" id="frmInfo">
                                        <div class="row m-t-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jobTitle1">Job Title :</label>
                                                    <input class="form-control" name="jobtitle1" type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="videoUrl1">Company Name :</label>
                                                    <input class="form-control" name="videoUrl1" type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="shortDescription1">Job Description :</label>
                                                    <textarea name="shortDescription" id="shortDescription1" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="step-tab-panel" id="tab3">
                                    <h3>Tab3</h3>
                                    <form name="frmLogin" id="frmLogin">
                                        <div class="row m-t-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="int1">Interview For :</label>
                                                    <input class="form-control" name="int1" type="text" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="intType1">Interview Type :</label>
                                                    <select class="custom-select form-control" data-placeholder="Type to search cities" name="intType1" required>
                                                        <option value="Banquet">Normal</option>
                                                        <option value="Fund Raiser">Difficult</option>
                                                        <option value="Dinner Party">Hard</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Location1">Location :</label>
                                                    <select class="custom-select form-control" id="Location1" name="location">
                                                        <option value="">Select City</option>
                                                        <option value="India">India</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Dubai">Dubai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jobTitle2">Interview Date :</label>
                                                    <input class="form-control" name="jobTitle2" type="date" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Requirements :</label>
                                                    <div class="c-inputs-stacked">
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input class="custom-control-input" type="checkbox">
                                                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Employee</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input class="custom-control-input" type="checkbox">
                                                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Contract</span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="step-tab-panel" id="tab4">
                                    <h3>Tab4</h3>
                                    <form name="frmMobile" id="frmMobile">
                                        <div class="row m-t-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="behName1">Behaviour :</label>
                                                    <input class="form-control" name="behName1" type="text" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Confidance</label>
                                                    <input class="form-control" name="participants1" type="text" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Result</label>
                                                    <select class="custom-select form-control" id="participants1" name="location">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">Call Second-time</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="decisions1">Comments</label>
                                                    <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rate Interviwer :</label>
                                                    <div class="c-inputs-stacked">
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input class="custom-control-input" type="checkbox">
                                                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">1 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input class="custom-control-input" type="checkbox">
                                                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">2 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input class="custom-control-input" type="checkbox">
                                                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">3 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input class="custom-control-input" type="checkbox">
                                                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">4 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input class="custom-control-input" type="checkbox">
                                                            <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">5 star</span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="step-footer">
                                <button data-direction="prev" class="btn btn-light">Previous</button>
                                <button data-direction="next" class="btn btn-primary">Next</button>
                                <button data-direction="finish" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main row -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">Version 1.2</div>
            Copyright © 2017 Yourdomian. All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url('assets/') ?>dist/js/jquery.min.js"></script>

    <!-- v4.0.0-alpha.6 -->
    <script src="<?php echo base_url('assets/') ?>dist/bootstrap/js/bootstrap.min.js"></script>

    <!-- template -->
    <script src="<?php echo base_url('assets/') ?>dist/js/niche.js"></script>

    <!-- form wizard -->
    <script src="<?php echo base_url('assets/') ?>dist/plugins/formwizard/jquery-steps.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script>
        var frmRes = $('#frmRes');
        var frmResValidator = frmRes.validate();

        var frmInfo = $('#frmInfo');
        var frmInfoValidator = frmInfo.validate();

        var frmLogin = $('#frmLogin');
        var frmLoginValidator = frmLogin.validate();

        var frmMobile = $('#frmMobile');
        var frmMobileValidator = frmMobile.validate();

        $('#demo1').steps({
            onChange: function(currentIndex, newIndex, stepDirection) {
                console.log('onChange', currentIndex, newIndex, stepDirection);
                // tab1
                if (currentIndex === 0) {
                    if (stepDirection === 'forward') {
                        var valid = frmRes.valid();
                        return valid;
                    }
                    if (stepDirection === 'backward') {
                        frmResValidator.resetForm();
                    }
                }

                // tab2
                if (currentIndex === 1) {
                    if (stepDirection === 'forward') {
                        var valid = frmInfo.valid();
                        return valid;
                    }
                    if (stepDirection === 'backward') {
                        frmInfoValidator.resetForm();
                    }
                }

                // tab3
                if (currentIndex === 2) {
                    if (stepDirection === 'forward') {
                        var valid = frmLogin.valid();
                        return valid;
                    }
                    if (stepDirection === 'backward') {
                        frmLoginValidator.resetForm();
                    }
                }

                // tab4
                if (currentIndex === 3) {
                    if (stepDirection === 'forward') {
                        var valid = frmMobile.valid();
                        return valid;
                    }
                    if (stepDirection === 'backward') {
                        frmMobileValidator.resetForm();
                    }
                }

                return true;

            },
            onFinish: function() {
                alert('Wizard Completed');
            }
        });
    </script>
    <script>
        $('#demo').steps({
            onFinish: function() {
                alert('Wizard Completed');
            }
        });
    </script>
</body>

</html>