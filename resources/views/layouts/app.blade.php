<!DOCTYPE html>
<html>
    <head>
        <title>LibreNMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
        <!-- CSS Libs -->
        <link rel="stylesheet" type="text/css" href="js/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="js/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="js/animate.css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="js/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
        <link rel="stylesheet" type="text/css" href="js/checkbox3/dist/checkbox3.min.css">
        <link rel="stylesheet" type="text/css" href="js/DataTables/media/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="js/datatables/media/css/dataTables.bootstrap.css">
        <link rel="stylesheet" type="text/css" href="js/select2/dist/css/select2.min.css">
        <!-- CSS App -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/themes/flat-blue.css">
    </head>
    <body class="flat-blue">
        @if (Auth::check())
            <div class="app-container">
                <div class="row content-container">
                    <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-expand-toggle">
                                    <i class="fa fa-bars icon"></i>
                                </button>
                                <ol class="breadcrumb navbar-breadcrumb">
                                    <li class="active">Dashboard</li>
                                </ol>
                                <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                                    <i class="fa fa-th icon"></i>
                                </button>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                                    <i class="fa fa-times icon"></i>
                                </button>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                                    <ul class="dropdown-menu animated fadeInDown">
                                        <li class="title">
                                            Notification <span class="badge pull-right">0</span>
                                        </li>
                                        <li class="message">
                                            No new notification
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown profile">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->username }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu animated fadeInDown">
                                        <li>
                                            <div class="profile-info">
                                                <h4 class="username">{{ Auth::user()->username }}</h4>
                                                <p>{{ Auth::user()->email }}</p>
                                                <div class="btn-group margin-bottom-2x" role="group">
                                                    <a href="{{ url('/preferences') }}" class="btn btn-default" role="button"><i class="fa fa-user"></i> Settings</a>
                                                    <a href="{{ url('/logout') }}" class="btn btn-default" role="button"><i class="fa fa-sign-out"></i> Logout</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="side-menu sidebar-inverse">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="side-menu-container">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="#">
                                        <div class="icon fa fa-home fa-lg"></div>
                                        <div class="title">LibreNMS</div>
                                    </a>
                                    <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                        <i class="fa fa-times icon"></i>
                                    </button>
                                </div>
                                <ul class="nav navbar-nav">
                                    <li class="active">
                                        <a href="{{ url('/') }}">
                                            <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                                        </a>
                                    </li>
                                    <!--<li class="panel panel-default dropdown">
                                        <a data-toggle="collapse" href="#dropdown-overview">
                                            <span class="icon fa fa-desktop"></span><span class="title">Overview</span>
                                        </a>
                                        <div id="dropdown-overview" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="nav navbar-nav">
                                                    <li class="panel panel-default dropdown">
                                                        <a data-toggle="collapse" href="#dropdown-alerts">
                                                            <span class="icon fa fa-exclamation-circle"></span><span class="title">Alerts</span>
                                                        </a>
                                                        <div id="dropdown-alerts" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <ul class="nav navbar-nav">
                                                                    <li><a href="ui-kits/theming.html"><span class="icon fa fa-bell"></span><span class="title">Notifications</span></a></li>
                                                                    <li><a href="ui-kits/theming.html"><span class="icon fa fa-th-list"></span><span class="title">Historical Logs</span></a></li>
                                                                    <li><a href="ui-kits/theming.html"><span class="icon fa fa-bar-chart"></span><span class="title">Statistics</span></a></li>
                                                                    <li><a href="ui-kits/theming.html"><span class="icon fa fa-tasks"></span><span class="title">Rules</span></a></li>
                                                                    <li><a href="ui-kits/theming.html"><span class="icon fa fa-calendar"></span><span class="title">Maintenance Windows</span></a></li>
                                                                    <li><a href="ui-kits/theming.html"><span class="icon fa fa-link"></span><span class="title">Rule Mappings</span></a></li>
                                                                    <li><a href="ui-kits/theming.html"><span class="icon fa fa-sitemap"></span><span class="title">Templates</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="panel panel-default dropdown">
                                                        <a data-toggle="collapse" href="#dropdown-maps">
                                                            <span class="icon fa fa-sitemap"></span><span class="title">Maps</span>
                                                        </a>
                                                        <div id="dropdown-maps" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <ul class="nav navbar-nav">
                                                                    <li><a href="ui-kits/theming.html"><span class="icon fa fa-arrow-circle-up"></span><span class="title">Availability</span></a></li>
                                                                    <li><a href="ui-kits/theming.html"><span class="icon fa fa-desktop"></span><span class="title">Network</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="panel panel-default dropdown">
                                                        <a data-toggle="collapse" href="#dropdown-tools">
                                                            <span class="icon fa fa-wrench"></span><span class="title">Tools</span>
                                                        </a>
                                                        <div id="dropdown-tools" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <ul class="nav navbar-nav">
                                                                    <li><a href="ui-kits/theming.html"><span class="icon fa fa-arrow-circle-up"></span><span class="title">RIPE NCC Api</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>-->
                                    <li class="panel panel-default dropdown">
                                        <a data-toggle="collapse" href="#dropdown-devices">
                                            <span class="icon fa fa-server"></span><span class="title">Devices</span>
                                        </a>
                                        <div id="dropdown-devices" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="nav navbar-nav">
                                                    <li class="panel panel-default dropdown">
                                                        <a data-toggle="collapse" href="#dropdown-all-devices">
                                                            <span class="icon fa fa-server"></span><span class="title">All Devices</span>
                                                        </a>
                                                        <div id="dropdown-all-devices" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <ul class="nav navbar-nav">
                                                                    <li><a href="{{ url('/devices') }}"><span class="icon fa fa-server"></span><span class="title">All Devices</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="license.html">
                                            <span class="icon fa fa-thumbs-o-up"></span><span class="title">License</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- Main Content -->
                    <div class="container-fluid main-body">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            <div>
        @endif

        @if (Auth::guest())
            @yield('content')
        @endif

        <!-- Javascript Libs -->
        <script type="text/javascript" src="js/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/Chart.js/Chart.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
        <script type="text/javascript" src="js/matchHeight/jquery.matchHeight-min.js"></script>
        <script type="text/javascript" src="js/DataTables/media/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/DataTables/media/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="js/select2/dist/js/select2.full.min.js"></script>
        <script type="text/javascript" src="js/ace-builds/src/ace.js"></script>
        <script type="text/javascript" src="js/ace-builds/src/mode-html.js"></script>
        <script type="text/javascript" src="js/ace-builds/src/theme-github.js"></script>
        <!-- Javascript -->
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>
