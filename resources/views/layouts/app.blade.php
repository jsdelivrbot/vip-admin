<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>VIP-Admin</title>


    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    @yield('head')

    <style>
        #accordion .glyphicon {
            margin-right: 10px;
        }

        .panel-collapse > .list-group .list-group-item:first-child {
            border-top-right-radius: 0;
            border-top-left-radius: 0;
        }

        .panel-collapse > .list-group .list-group-item {
            border-width: 1px 0;
        }

        .panel-collapse > .list-group {
            margin-bottom: 0;
        }

        .panel-collapse .list-group-item {
            border-radius: 0;
        }

        .panel-collapse .list-group .active a {
            color: #fff;
        }
    </style>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">VIP Admin Dashboard</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                @yield('navbar')
                @if(\App\Http\Controllers\DaemonController::isOnline())
                    <li><a><span class="label label-success">Daemon is online</span></a></li>
                @else
                    <li><a><span class="label label-danger">Daemon is offline</span></a></li>
                @endif
                @if(\App\Http\Controllers\DaemonController::isLoggedIn())
                    <li><a><span class="label label-success">Daemon is connected to Steam</span></a></li>
                @else
                    <li><a><span class="label label-danger">Daemon is disconnected from Steam servers</span></a></li>
                @endif
                <li><a href="{{ route('settings') }}">Settings</a></li>

                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-3 col-md-2 sidebar">


            <div class="panel-group" id="accordion">


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseZero">
                                <span class="glyphicon glyphicon-asterisk"></span>VIP-Admin
                            </a>
                        </h4>
                    </div>
                    <div id="collapseZero" class="panel-collapse collapse in">
                        <ul class="list-group">
                            <li class="list-group-item {{ Route::is('home') ? 'active' : ''}}">
                                <span class="glyphicon glyphicon-home"></span>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="list-group-item">
                                <span class="glyphicon glyphicon-home"></span>
                                <a href="http://steamcommunity.com/id/de_nerd" target="_blank">Ajuda</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                <span class="glyphicon glyphicon-star"></span>VIP
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <ul class="list-group">
                            <li class="list-group-item {{ Route::is('inventory') ? 'active' : ''}}">
                                <span class="glyphicon glyphicon-usd"></span>
                                <a href="{{ route('inventory') }}">Buy VIP with Skins</a>
                            </li>

                            <li class="list-group-item {{ Route::is('token') ? 'active' : '' }}">
                                <span class="glyphicon glyphicon-gift"></span>
                                <a href="{{ route('token') }}">Buy VIP with Tokens</a>
                            </li>

                            <li class="list-group-item">
                                <span class="glyphicon glyphicon-credit-card"></span>
                                <a href="#">Buy VIP with MercadoPago</a>
                            </li>
                        </ul>
                    </div>
                </div>


                @if(Auth::user()->isAdmin())
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <span class="glyphicon glyphicon-tasks"></span>Daemon
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <ul class="list-group">
                                @if(\App\Http\Controllers\DaemonController::isOnline() && !\App\Http\Controllers\DaemonController::isLoggedIn())
                                    <li class="list-group-item {{ Route::is('daemon-login') ? 'active' : ''}}">
                                        <span class="glyphicon glyphicon-play"></span>
                                        <a href="{{ route('daemon-login') }}">Login</a>
                                    </li>
                                @endif
                                <li class="list-group-item {{ Route::is('daemon-logs') ? 'active' : '' }}">
                                    <span class="glyphicon glyphicon-console"></span>
                                    <a href="{{ route('daemon-logs') }}">Logs</a>
                                </li>

                                <li class="list-group-item {{ Route::is('daemon-stdout') ? 'active' : '' }}">
                                    <span class="glyphicon glyphicon-console"></span>
                                    <a href="{{ route('daemon-stdout') }}">Stdout</a>
                                </li>

                                <li class="list-group-item {{ Route::is('daemon-stderr') ? 'active' : '' }}">
                                    <span class="glyphicon glyphicon-console"></span>
                                    <a href="{{ route('daemon-stderr') }}">Stderr</a>
                                </li>

                                <li class="list-group-item {{ Route::is('daemon-kill') ? 'active' : '' }}">
                                    <span class="glyphicon glyphicon-remove"></span>
                                    <a href="{{ route('daemon-kill') }}">Kill</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                <span class="glyphicon glyphicon-user"></span>Account
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse in">
                        <ul class="list-group">
                            <li class="list-group-item {{ Route::is('orders') ? 'active' : '' }}">
                                <span class="glyphicon glyphicon-usd"></span>
                                <a href="{{ route('orders') }}">Orders</a>
                                <span class="badge">{{ Auth::user()->orders()->count() }}</span>
                            </li>
                            <li class="list-group-item {{ Route::is('confirmations') ? 'active' : '' }}">
                                <span class="glyphicon glyphicon-ok"></span>
                                <a href="{{ route('confirmations') }}">Confirmations</a>
                                <span class="badge">{{ Auth::user()->confirmations()->count() }}</span>
                            </li>
                            <li class="list-group-item {{ Route::is('settings') ? 'active' : '' }}">
                                <span class="glyphicon glyphicon-cog"></span>
                                <a href="{{ route('settings') }}">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>

                @if(Auth::user()->isAdmin())
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    <span class="glyphicon glyphicon-cloud"></span>Administrative
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse in">
                            <ul class="list-group">
                                <li class="list-group-item {{ Route::is('laravel-logs') ? 'active' : '' }}">
                                    <span class="glyphicon glyphicon-console"></span>
                                    <a href="{{ route('laravel-logs') }}">Logs</a>
                                </li>
                                <li class="list-group-item {{ Route::is('tokens') ? 'active' : '' }}">
                                    <span class="glyphicon glyphicon-tag"></span>
                                    <a href="{{ route('tokens') }}">Tokens</a>
                                </li>
                                <li class="list-group-item">
                                    <span class="glyphicon glyphicon-refresh"></span>
                                    <a href="{{ route('sync-server') }}">Sync Server</a>
                                </li>
                                <li class="list-group-item  {{ Route::is('token-generation') ? 'active' : '' }}">
                                    <span class="glyphicon glyphicon-plus"></span>
                                    <a href="{{ route('token-generation') }}">Generate token</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @include('flash::message')
            @yield('content')
        </div>
        </footer>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/js/ie10-viewport-bug-workaround.js"></script>
@yield('script')
</body>
</html>