<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        {{HTML::style('css/bootstrap-responsive.min.css')}}
        {{HTML::style('css/bootstrap.min.css')}}
        {{HTML::script('js/bootstrap.min.js')}}
        <title>{{$title}}</title>
        <style>
            #wrap > .container {
                padding-top: 80px;
            }
        </style>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">

                    <div class="nav-collapse collapse">
                        <a class="brand" href="/">{{$title}}</a>
                        <ul class="nav pull-right">
                            <li>
                                <a href="/">Sign In</a>
                            </li>
                        </ul>

                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div id="wrap">
            <div class="container">
                @yield('content')
                {{--register--}}
                @yield('register')
            </div>
        </div>

        <div class="navbar navbar-fixed-bottom">
            <hr>
            <center> <p class="muted credit">{{date('Y')}}</p></center>
        </div>
    </body>
</html>