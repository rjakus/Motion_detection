<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Motion Detection</title>
    
    <!-- Styles -->
    <link href="{{{ asset('/css/bootstrap.min.css') }}}" rel="stylesheet">
    <link href="{{{ asset('/css/londinium-theme.css') }}}" rel="stylesheet">
    <link href="{{{ asset('/css/styles.css') }}}" rel="stylesheet">
    <link href="{{{ asset('/css/icons.css') }}}" rel="stylesheet">
    

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    
    <!-- JavaScripts -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

    <script src="{{{ asset('/js/plugins/charts/sparkline.min.js') }}}"></script>

    <script src="{{{ asset('/js/plugins/forms/uniform.min.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/forms/select2.min.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/forms/inputmask.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/forms/autosize.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/forms/inputlimit.min.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/forms/listbox.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/forms/multiselect.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/forms/validate.min.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/forms/tags.min.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/forms/switch.min.js') }}}"></script>

    <script src="{{{ asset('/js/plugins/forms/uploader/plupload.full.min.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/forms/uploader/plupload.queue.min.js') }}}"></script>

    <script src="{{{ asset('/js/plugins/forms/wysihtml5/wysihtml5.min.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/forms/wysihtml5/toolbar.js') }}}"></script>

    <script src="{{{ asset('/js/plugins/interface/daterangepicker.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/interface/fancybox.min.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/interface/moment.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/interface/jgrowl.min.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/interface/datatables.min.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/interface/colorpicker.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/interface/fullcalendar.min.js') }}}"></script>
    <script src="{{{ asset('/js/plugins/interface/timepicker.min.js') }}}"></script>

</head>

<body class="full-width">
    <!-- Navbar -->
    <div class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/home') }}">Motion detection</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
                <span class="sr-only">Toggle navbar</span>
                <i class="icon-grid3"></i>
            </button>
        </div>

        <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
            @if (Auth::guest())
                <li><a class="dropdown-toggle" href="{{ url('/login') }}">Login</a></li>
               <!-- <li><a class="dropdown-toggle" href="{{ url('/register') }}">Register</a></li> -->
            @else
                <li class="dropdown">
                    <a class="dropdown-toggle" href="{{ url('/home') }}">
                        Live camera
                    </a>
                </li>
		<li class="dropdown">
                    <a class="dropdown-toggle" href="{{ url('/vision') }}">
                        Data report
                    </a>
                </li>
		<li class="dropdown">
		    <a class="dropdown-toggle" data-toggle="dropdown">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right icons-right">
                        <li><a href="{{ url('/logout') }}"><i class="icon-exit"></i> Logout</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
    

    @yield('content')
    
    <!-- Footer -->
    <div class="footer clearfix">
        <div class="pull-left">&copy; 2016. Created by 
            <a href="https://www.facebook.com/elicul93">Enzo Licul</a>
            &
            <a href="https://www.facebook.com/rikardo.jakus.7">Rikardo Jakus</a>
        </div>
    </div>
    <!-- /footer -->

    <!-- JavaScripts -->
    <script src="{{{ asset('/js/bootstrap.min.js') }}}"></script>
    <script src="{{{ asset('/js/application.js') }}}"></script>
 
</body>
</html>
