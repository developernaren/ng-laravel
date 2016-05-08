<html>
<head>
    <title>Angular App</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
</head>
<body>
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