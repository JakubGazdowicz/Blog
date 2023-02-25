<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>

    <!-- FAVI ICON -->
    <link rel="icon"  href="{{ url('images/favi.png') }}" sizes="32x32">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
    <!-- ALL GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Monoton" rel="stylesheet" type='text/css'>
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="{{ url('fonts/linear-fonts.css') }}">
    <link rel="stylesheet" href="{{ url('fonts/font-awesome.css') }}">
    <!-- OWL CAROSEL CSS -->
    <link rel="stylesheet" href="{{ url('owlcarousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('owlcarousel/css/owl.theme.css') }}">
    <!-- LIGHTBOX CSS -->
    <link rel="stylesheet" href="{{ url('css/lightbox.min.css') }}">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="{{ url('css/animate.min.css') }}">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">


</head>
<body>
<!-- START PRELOADER -->
<div class="preloader">
    <div class="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- / END PRELOADER -->

<div id="header-top" class="header-top-area">
    <div class="container text-center">
        <a class="logo" href="{{ route('home.index') }}">Blog</a>
    </div>
    <div class="header-social-icon text-center">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
</div>

<!-- START NAVIGATION -->
<nav id="main-nav" class="navbar navbar-default main-nav-area">
    <div class="container">
        <!-- START TOGGLE NAVIGATION FOR BETTER MOBILE DISPLAY -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- / END TOGGLE NAVIGATION FOR BETTER MOBILE DISPLAY -->

        <!-- START CONTENT FOR TOGGLING -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav text-center">
                <li class="active"><a href="{{ route('home.index') }}">Blog</a></li>
                <li><a href="{{ route('gallery') }}">Galeria</a></li>
                <li><a href="{{ route('contact') }}">Kontakt</a></li>
                @guest
                <li><a href="{{ route('login') }}">Logowanie</a></li>
                <li><a href="{{ route('register') }}">Rejestracja</a></li>
                @endguest

                @can('admin-level')
                <li><a href="{{ route('adminPanel.index') }}">Panel administratora</a></li>
                @endcan

                @auth
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Wyloguj</button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
        <!-- / END CONTENT FOR TOGGLING -->
    </div>
</nav>
<!-- / END NAVIGATION -->

@yield('content')

<!-- START FOOTER DESIGN AREA -->
<footer class="footer-area wow fadeInUp" data-wow-delay="1s">
    <div class="container">
        <div class="row text-center">
            <a class="logo" href="{{ route('home.index') }}">Blog</a>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="short-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>

                <div class="footer-social-link text-center">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- START SCROOL UP DESIGN AREA -->
    <div class="scroll-to-up">
        <div class="scrollup">
            <span class="lnr lnr-chevron-up"></span>
        </div>
    </div>
    <!-- / END SCROOL UP DESIGN AREA -->

    <!-- LATEST JQUERY -->
    <script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>
    <!-- BOOTSTRAP JS -->
    <script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- PROGRESS JS  -->
    <script src="{{ url('js/jquery.appear.js')}}"></script>
    <!-- OWL CAROUSEL JS  -->
    <script src="{{ url('owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- urlITUP JS -->
    <script src="{{ url('js/jquery.mixitup.js') }}"></script>
    <!-- MAGNIFICANT JS -->
    <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- STEALLER JS -->
    <script src="{{ url('js/jquery.stellar.min.js') }}"></script>
    <!-- YOUTUBE JS -->
    <script src="{{ url('js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script type="text/javascript">
        $('.player').mb_YTPlayer();
    </script>
    <!-- COUNTER UP JS -->
    <script src="{{ url('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('js/jquery.counterup.min.js') }}"></script>
    <!-- LIGHTBOX JS -->
    <script src="{{ url('js/lightbox.min.js') }}"></script>
    <!-- WOW JS -->
    <script src="{{ url('js/wow.min.js') }}"></script>
    <!-- scripts js -->
    <script src="{{ url('js/scripts.js') }}"></script>
</body>
</html>
