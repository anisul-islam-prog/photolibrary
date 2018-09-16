<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="PhotoList -Portfolio">
    <meta name="keywords" content="PhotoList , Portfolio">
    <meta name="author" content="Template made by Pharaohlab, Anisul Islam">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> PhotoList -Portfolio</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->

    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">

    <!-- Fonts Icon CSS -->
    <link href="{{URL::asset('css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/et-line.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/icons.css')}}" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="{{URL::asset('css/slick.css')}}" rel="stylesheet">
    <!-- Magnific-popup -->
    <link href="{{URL::asset('css/magnific-popup.css')}}" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{URL::asset('css/animate.css')}}" rel="stylesheet">
    <!-- main CSS -->
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/app.css" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<div class="body-container container-fluid">
    <a class="menu-btn" href="javascript:void(0)">
        <i class="ion ion-grid"></i>
    </a>
    <div class="row justify-content-center">
                @include('inc.sidebar')
    </div>
        <!--=================== content body ====================-->
        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
              @include('inc.messages')
              @yield('content')
        <!--=================== content body end ====================-->
    </div>
</div>


<!-- jquery -->
<script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
<!-- bootstrap -->
<script type="text/javascript" src="{{URL::asset('js/popper.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/waypoints.min.js')}}"></script>
<!--slick carousel -->
<script type="text/javascript" src="{{URL::asset('js/slick.min.js')}}"></script>
<!--Portfolio Filter-->
<script type="text/javascript" src="{{URL::asset('js/imgloaded.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/isotope.js')}}"></script>
<!-- Magnific-popup -->
<script type="text/javascript" src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
<!--Counter-->
<script type="text/javascript" src="{{URL::asset('js/jquery.counterup.min.js')}}"></script>
<!-- WOW JS -->
<script type="text/javascript" src="{{URL::asset('js/wow.min.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
<!-- Global site tag (gtag.js) - Google Analytics

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');

 -->
</script>
</body>
</html>
