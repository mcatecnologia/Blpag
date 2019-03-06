<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>BLPAG</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('lib/ace/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('lib/ace/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="{{asset('lib/ace/css/fonts.googleapis.com.css')}}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('lib/ace/css/ace.min.css')}}"  />

    <!--[if lte IE 9]>-->
    <link rel="stylesheet" href="{{asset('lib/ace/css/ace-part2.min.css')}}"  />
    <!--[endif]-->
    <link rel="stylesheet" href="{{asset('lib/ace/css/ace-skins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('lib/ace/css/ace-rtl.min.css')}}" />

    <!--[if lte IE 9]>-->
    <link rel="stylesheet" href="{{asset('lib/ace/css/ace-ie.min.css')}}" />

    <link rel="stylesheet" href="{{asset('lib/ace/css/ace-rtl.min.css')}}" />
    <link rel="stylesheet" href="{{asset('lib/ace/css/ace-ie.min.css')}}" />
    <link rel="stylesheet" href="{{asset('lib/ace/css/custom.css')}}" />
    <link rel="stylesheet" href="{{asset('lib/ace/css/bootstrap-duallistbox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('lib/ace/css/bootstrap-multiselect.min.css')}}" />
    <link rel="stylesheet" href="{{asset('lib/ace/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('lib/ace/css/fullcalendar.min.css')}}" />
    <link rel="stylesheet" href="{{asset('lib/ace/css/jquery.gritter.min.css')}}" />

    <!--[endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{asset('lib/ace/js/ace-extra.min.js')}}"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>-->
    <script src="{{asset('lib/ace/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('lib/ace/js/respond.min.js')}}"></script>
    <!--[endif]-->
</head>
<body>
@include('layouts._dashboard._topmenu')



<div class="main-content">
        <main class="py-4">
            @yield('content')
        </main>
</div>



<div class="footer">
    <div class="footer-inner">
        <div class="footer-content">
            <span class="bigger-120">
              <span class="blue bolder">BL BPO</span> &copy; 2019
            </span>


            <span class="action-buttons">
              <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

              <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

              <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
            </span>
        </div>
    </div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{asset('lib/ace/js/jquery-2.1.4.min.js')}}"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="{{asset('lib/ace/js/jquery-1.11.3.min.js')}}"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('lib/ace/js/jquery.mobile.custom.min.js')}}'>"+"<"+"/script>");
</script>
<script src="{{asset('lib/ace/js/bootstrap.min.js')}}"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="{{asset('lib/ace/js/ace-elements.min.js')}}"></script>
<script src="{{asset('lib/ace/js/ace.min.js')}}"></script>

<!-- inline scripts related to this page -->
</body>
</html>



