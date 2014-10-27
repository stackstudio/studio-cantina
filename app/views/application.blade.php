<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Studio Cantina</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Dunbavan" />
    <!--  Mobile Viewport Fix -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">

    <!-- iOS favicons. -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
    <link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/mobile-tablet.css') }}">
    <link rel="stylesheet" href="/css/style.css">

    <!-- Jquery defined here -->
    <script src="{{ URL::asset('/js-modules/lib/jquery.js') }}"></script>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="{{ URL::asset('/js-modules/lib/respond.min.js') }}"></script>
        <![endif]-->

</head>
<body>

@include('snippet/menu')
@include('snippet/mobile')
<div class="loader"><div class="spin"></div></div>
    <div class="body">
        <div class="main">
            @yield('content')
        </div>
    </div>
     
<div class="clearfix"></div>
<div class="back-top">
    <a class="fa"></a>
</div>
@include('snippet/footer')
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '', '');
  ga('send', 'pageview');

</script>
</body>
</html>