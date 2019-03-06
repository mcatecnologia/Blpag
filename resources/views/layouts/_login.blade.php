<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BL PAG - BL BPO') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('lib/ace/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('lib/ace/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{asset('lib/ace/css/fonts.googleapis.com.css')}}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('lib/ace/css/ace.min.css')}}" />
    <link rel="stylesheet" href="{{asset('lib/ace/css/ace-rtl.min.css')}}" />
    <link rel="stylesheet" href="{{asset('lib/ace/css/custom.css')}}" />

</head>
<body class="login-layout" style="background-image: url('{{asset('img/bg/login_bg.jpg')}}')">
<div class="opaque"></div>

<div id="app">


    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>

<!-- Script Modal Register.phtml -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="{{asset('lib/ace/js/jquery-2.1.4.min.js')}}"></script>

<script type="text/javascript">
    if('ontouchstart' in document.documentElement)
        document.write("<script src='{{asset('lib/ace/js/jquery.mobile.custom.min.js')}}'>"+"<"+"/script>");
</script>

<script type="text/javascript">

    jQuery(function($) {
        $(document).on('click', '.toolbar a[data-target]', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('.widget-box.visible').removeClass('visible');//hide others
            $(target).addClass('visible');//show target
        });
    });

    //you don't need this, just used for changing background
    jQuery(function($) {
        $('#btn-login-dark').on('click', function(e) {
            $('body').attr('class', 'login-layout');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-light').on('click', function(e) {
            $('body').attr('class', 'login-layout light-login');
            $('#id-text2').attr('class', 'grey');
            $('#id-company-text').attr('class', 'blue');

            e.preventDefault();
        });
        $('#btn-login-blur').on('click', function(e) {
            $('body').attr('class', 'login-layout blur-login');
            $('#id-text2').attr('class', 'white');
            $('#id-company-text').attr('class', 'light-blue');

            e.preventDefault();
        });

    });
</script>

<script type="text/javascript" src="{{asset('lib/ace/js/app/html.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/ace/assets/js/app/app.js')}}"></script>
</html>

