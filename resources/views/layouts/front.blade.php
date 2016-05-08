<html ng-app="LaravelNg">
<head>
    <title>Angular App</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">



    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/angular.js') }}"></script>
    <script src="{{ asset('assets/js/route.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</head>
<body >
<div class="container">
    <header class="clearfix">
        <nav class="navbar pull-left ">
            <ul class="navbar list-inline">
                <li class="nav-pills"><a href="{{ url('/') }}"><i class="glyphicon glyphicon-home"></i> Home</a></li>
            </ul>

        </nav>
        <div class="pull-right">
            Narendra Chitrakar
        </div>
    </header>
        @yield('content')
</div>
</body>
</html>