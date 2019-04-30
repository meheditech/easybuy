<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="#" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    {{--Fab Icon--}}
    <link rel="icon" href="{{ asset('images/m.jpg') }}">

    <!-- //for-mobile-apps -->
    <link href="{{ asset('easybuys/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('easybuys/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{ asset('easybuys/css/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- //font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('easybuys/css/flexslider.css') }}" type="text/css" media="screen" property="" />
    <!-- js -->
    <script src="{{ asset('easybuys/js/jquery-1.11.1.min.js') }}"></script>
    <script src='{{ asset('easybuys/js/okzoom.js') }}'></script>
    {{--Slider--}}
    <link href="{{ asset('css/shCore.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/shThemeDefault.css') }}" rel="stylesheet" type="text/css" />
    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/flexslider-rtl.css') }}" type="text/css" media="screen" />
    {{--<link rel="stylesheet" href="{{ asset('css/demo.css') }}" type="text/css" media="screen" />--}}
    <!-- Modernizr -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    {{--Sweet Alert--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

        <script>
        $(function(){
            $("#logo").okzoom({
                backgroundRepeat: "repeat"
            });
            $('#example').okzoom({
                width: 150,
                height: 150,
                border: "1px solid black",
                shadow: "0 0 5px #000"
            });
            $('#data-example').okzoom({
                width: 150,
                height: 150,
                backgroundRepeat: "repeat"
            });
        });
    </script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ asset('easybuys/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('easybuys/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>