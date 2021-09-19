<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Peluqueria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Profession is Personal Portfolio Template">
    <meta name="keywords" content="business, clean, contact form, corporate, cv, light, minimalist, modern, personal, personal profile, portfolio, resume, vcard, virtual card">
    <meta name="author" content="">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{asset ('css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset ('css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset ('css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset ('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset ('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset ('css/stylesss.css')}}" />

    <!-- background -->
    <link rel="stylesheet" href="{{asset ('css/bg.css')}}" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="{{asset ('css/colors/scheme-2.css')}}" type="text/css">
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header class="autoshow">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="#wrapper">
                                <!-- <img class="logo" src="images/logo-light.png" alt="">
                            <img class="logo-2" src="images/logo-dark.png" alt=""> -->
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a class="active" href="#top">Inicio<span></span></a></li>
                                <li><a href="#section-about">Quienes somos<span></span></a></li>
                                <!-- <li><a href="#section-services">Services<span></span></a></li> -->
                                <li><a href="#section-portfolio">Portafolio<span></span></a></li>
                                <!-- <li><a href="#section-experiences">Experiences<span></span></a></li> -->
                                <li><a href="#section-contact">Contactenos<span></span></a></li>
                                <li><a href="{{ route('login') }}">Inisiar sesion<span></span></a></li>
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        @yield('content')


    </div>

    <!-- footer begin -->
    <footer>
        <div class="container text-center text-light">
            <div class="row">
                <div class="col-md-12">
                    <div class="social-icons big">
                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="subfooter">
            <div class="container text-center">
                <div class="row">
                </div>
            </div>
        </div>
    </footer>
    <!-- footer close -->

    <a href="#" id="back-to-top"></a>
    <div id="preloader">
        <div class="s1">
            <span></span>
            <span></span>
        </div>
    </div>
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{asset ('js/jquery.min.js')}}"></script>
    <script src="{{asset ('js/bootstrap.min.js')}}"></script>
    <script src="{{asset ('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset ('js/easing.js')}}"></script>
    <script src="{{asset ('js/owl.carousel.js')}}"></script>
    <script src="{{asset ('js/jquery.countTo.js')}}"></script>
    <script src="{{asset ('js/validation.js')}}"></script>
    <script src="{{asset ('js/wow.min.js')}}"></script>
    <script src="{{asset ('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset ('js/enquire.min.js')}}"></script>
    <script src="{{asset ('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset ('js/jquery.plugin.js')}}"></script>
    <script src="{{asset ('js/typed.js')}}"></script>
    <script src="{{asset ('js/typed-custom.js')}}"></script>
    <script src="{{asset ('js/designesia.js')}}"></script>
    <script src="{{asset ('js/script.js')}}"></script>

</body>

</html>