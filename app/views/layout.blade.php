<!doctype html>
<html class="no-js" lang="{{ $lang }}">
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

        {{HTML::style('css/material.min.css')}}
        {{HTML::style('css/material-fullpalette.min.css')}}
        {{HTML::style('css/ripples.min.css')}}
        {{HTML::style('css/roboto.min.css')}}

    </head>
    <body id="homepage">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">

            <div class="header">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="{{ URL::to('/') }}"><img id="logo" src="img/logo-1.png"></a></li>
                    <li>{{ HTML::link('#',Lang::get('text.header.0')) }}</li>
                    <li>{{ HTML::link('#programs',Lang::get('text.header.1')) }}</li>
                    <li>{{ HTML::link('#gallery',Lang::get('text.header.2')) }}</li>
                    <li>{{ HTML::link('#contact',Lang::get('text.header.3')) }}</li>
                    <li>{{ HTML::link('#',Lang::get('text.header.4')) }}</li>
                </ul>
            </div>

            <div class="social">
                <ul>
                    <li><a href=""><img src="img/social/facebook.png"></a></li>
                    <li><a href=""><img src="img/social/twitter.png"></a></li>
                    <li><a href=""><img src="img/social/linkedin.png"></a></li>
                    <li><a href=""><img src="img/social/youtube.png"></a></li>
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
                    <span>¿Quiere cambiar el idioma?</span>
                    <a href="home/es">{{ HTML::image('img/social/spain.png') }}</a>
                    <a href="home/en">{{ HTML::image('img/social/usa.png') }}</a>
                </div>
            </div>

        </div>    

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
        {{HTML::script('slick/slick.min.js')}}
        {{HTML::script('js/material.min.js')}}
        {{HTML::script('js/ripples.min.js')}}

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
