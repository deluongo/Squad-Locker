<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>
            {{-- Yield the title if it exists, otherwise default to 'Squad Locker' --}}
            @yield('title','Squad Locker')
        </title>

        <meta name="description" content="We connect elite MyPlayers and top teams with complimentary play styles.">
        <meta name="author" content="Devon Luongo">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->

        <link rel="shortcut icon" href="{{ asset('/img/branding/logos/l_icon.png') }}">

        <link rel="icon" type="image/jpg" href="{{ asset('/img/favicons/logo-16x16.jpg') }}" sizes="16x16">
        <link rel="icon" type="image/jpg" href="{{ asset('/img/favicons/logo-32x32.jpg') }}" sizes="32x32">
        <link rel="icon" type="image/jpg" href="{{ asset('/img/favicons/logo-96x96.jpg') }}" sizes="96x96">
        <link rel="icon" type="image/jpg" href="{{ asset('/img/favicons/logo-160x160.jpg') }}" sizes="160x160">
        <link rel="icon" type="image/jpg" href="{{ asset('/img/favicons/logo-192x192.jpg') }}" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/img/favicons/apple-touch-icon-57x57.jpg') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/img/favicons/apple-touch-icon-60x60.jpg') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/img/favicons/apple-touch-icon-72x72.jpg') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/favicons/apple-touch-icon-76x76.jpg') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicons/apple-touch-icon-114x114.jpg') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/favicons/apple-touch-icon-120x120.jpg') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/img/favicons/apple-touch-icon-144x144.jpg') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/img/favicons/apple-touch-icon-152x152.jpg') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/favicons/apple-touch-icon-180x180.jpg') }}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" id="css-main" href= "{{ asset('/css/oneui.css') }}">

        <!-- Page JS Plugins CSS go here -->
        {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
        @yield('head')

        <!-- SumoMe Install
        <script src="//load.sumome.com/" data-sumo-site-id="fb60ddc55e6d0c65d90a3638aaaacc2a7b181fea41db21f14bebcdd9d5423d75" async="async"></script>
        //-->
        <!-- END Stylesheets -->
    </head>
    <body>
          {{-- Main page content will be yielded here --}}
          @yield('content')

        <!-- Footer -->
        <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
            <div class="pull-right">
                Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="" target="_blank">Devon Luongo</a>
            </div>
        </footer>
        <!-- END Footer -->


        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="{{ URL::asset('js/oneui.min.js') }}"></script>

        <!-- Page JS Plugins + Page JS Code -->
        {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
        @yield('js')


    </body>
</html>
