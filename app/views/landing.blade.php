<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="img/logo-1.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
     
        {{HTML::style('css/bootstrap.min.css')}}
        {{HTML::style('css/jumbotron-narrow.css')}}
        {{HTML::script('js/vendor/jquery-1.11.3.min.js')}}
        {{HTML::script('js/bootstrap.min.js')}}
        {{HTML::style('css/custom.css')}}
        {{HTML::script('js/custom.js')}}
    </head>

    <body id="frontpage">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

            <div class="text-center">
                <h2>Welcome to</h2>
                <div>
                    <img src="img/logo.svg">
                    <h1>Aviation Flight Training Academy</h1>
                </div>
                <ul class="list-inline">
                    <li>
                        <a href="{{ URL::to('home/en') }}">
                            <h4>English</h4>
                            <img src="img/social/usa.png">
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('home/es') }}">
                            <h4>Español</h4>
                            <img src="img/social/spain.png">
                        </a>
                    </li>
                </ul>
            </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-65634984-1','auto');ga('send','pageview');
        </script>
    </body>
</html>
