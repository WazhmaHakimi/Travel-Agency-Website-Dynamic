<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="images/favicon_1.ico">

    <title>Travel Agency</title>

    <!-- Base Css Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Icons -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
    <link href="css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- animate css -->
    <link href="css/animate.css" rel="stylesheet" />

    <!-- Waves-effect -->
    <link href="css/waves-effect.css" rel="stylesheet">

  <!-- Plugin Css-->
  <link rel="stylesheet" href="assets/magnific-popup/magnific-popup.css" />
  <link rel="stylesheet" href="assets/jquery-datatables-editable/datatables.css" />

    <!-- Custom Files -->
    <link href="css/helper.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="js/modernizr.min.js"></script>

</head>



<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Travel Agency </span></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-bars"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>

                        <ul class="nav navbar-nav navbar-right pull-right">
                            
                            <li class="dropdown pt-4">
                                <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
                                    <div class="thumb-md img-circle text-uppercase" style="background-color: rgb(237, 89, 15); color: white; display: flex; justify-content: center; align-items: center; font-size: 25px; font-weight: bold; margin-top:1rem">
                                        {{ substr(auth()->user()->name, 0, 1) }}
                                    </div>    
                                </a>
                                <ul class="dropdown-menu">
                               
                                
                                <li>                                    
                                <form method="POST" action="{{ route('logout') }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" style="width:100%">
                                        <i class="md md-settings-power"></i> Logout
                                    </button>
                                </form>
                                </li>
                            </ul>

                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <div class="user-details">
                    <div class="pull-left">
                        <div class="thumb-md img-circle text-uppercase" style="background-color: rgb(237, 89, 15); color: white; display: flex; justify-content: center; align-items: center; font-size: 25px; font-weight: bold;">
                            {{ substr(auth()->user()->name, 0, 1) }}
                        </div>
                    </div>
                    <div class="user-info">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" style="width:100%">
                                            <i class="md md-settings-power"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <p class="text-muted m-0">Administrator</p>
                    </div>
                </div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="/admin" class="waves-effect"><i class="md md-home"></i><span> Dashboard
                                </span></a>
                        </li>
                        <li>
                            <a href="/" class="waves-effect"><i class="md md-home"></i><span> Back to Home Page
                                </span></a>
                        </li>

                      
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->