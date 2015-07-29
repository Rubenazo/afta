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

        {{HTML::style('slick/slick.css')}}
        {{HTML::style('slick/slick-theme.css')}}

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">

            <div class="header">
                <img id="logo" src="img/logo-1.png">
                <ul class="nav nav-pills pull-right">
                    <li>{{ HTML::link('home','Home') }}</li>
                    <li>{{ HTML::link('/','Training Programs') }}</li>
                    <li>{{ HTML::link('/','Gallery') }}</li>
                    <li>{{ HTML::link('/','Contact Us') }}</li>
                    <li>{{ HTML::link('/','Find Us') }}</li>
                </ul>
            </div>

        <div class="content">
        
            @yield('content')

        </div>

            <div class="footer">
                <div class="col-xs-6">
                    <address>
                        Address: 6625 Miami Lakes Drive Ste. #374 Miami Lakes, FL 33014 <br/>
                        Phone: 305-777-3887 <br/>
                        Email: info@aftapilot.com
                    </address>
                </div>
                <div class="col-xs-6">
                    <span><br/>¿Quiere cambiar el idioma?</span>
                    {{ HTML::image('img/social/spain.png') }}
                    {{ HTML::image('img/social/usa.png') }}
                </div>
            </div>

        </div>    

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        {{HTML::script('slick/slick.min.js')}}

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
