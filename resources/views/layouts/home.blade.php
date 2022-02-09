<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BET</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('page/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('page/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('page/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('page/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('page/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('page/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('page/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('page/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('page/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('page/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('page/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('page/css/style.css') }}">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>B.E.T</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{route('/')}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{route('Barberia')}}" class="nav-link">Barberia</a></li>
                    <li class="nav-item"><a href="{{route('Tattoo')}}" class="nav-link">Tattoo</a></li>
                    <!--      <li class="nav-item"><a href="{{route('Blog')}}" class="nav-link">Blog</a></li> -->
                    <li class="nav-item"><a href="{{route('Contact')}}" class="nav-link">Contacto</a></li>
                    <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Iniciar sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->



                    @yield('content')




                    <footer class="ftco-footer ftco-section">
                        <div class="container">
                            <div class="row mb-5">
                                <div class="col-md">
                                    <div class="ftco-footer-widget mb-4">
                                        <h2 class="ftco-heading-2 logo">HORARIO DE ATENCIÓN</h2>
                                        <table>
                                            <tr>
                                                <th> Lunes:</th>
                                                <td> 08:00 - 14:00 / 15:00 - 21:00 </td>
                                            </tr>
                                            <tr>
                                                <th> Martes:</th>
                                                <td> 06:00 - 14:00 / 15:00 - 21:00 </td>
                                            </tr>
                                            <tr>
                                                <th> Miércoles:</th>
                                                <td> 06:00 - 14:00 / 15:00 - 21:00 </td>
                                            </tr>
                                            <tr>
                                                <th> Jueves:</th>
                                                <td> 08:00 - 14:00 / 15:00 - 22:00 </td>
                                            </tr>
                                            <tr>
                                                <th> Viernes:</th>
                                                <td> 08:00 - 14:00 / 15:00 - 21:00 </td>
                                            </tr>
                                            <tr>
                                                <th> Sábado:</th>
                                                <td> 08:00 - 14:00 / 15:00 - 21:00 </td>
                                            </tr>
                                            <tr>
                                                <th> Domingo:</th>
                                                <td> 08:00 - 14:00 / 15:00 - 21:00 </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="ftco-footer-widget mb-4">
                                        <h2 class="ftco-heading-2">TIENES PREGUNTAS?</h2>
                                        <div class="block-23 mb-3">
                                            <p>B.E.T Barber Shop, barbería, estilo y tatuajes, apuesta por calidad y un excelente servicio</p>
                                            <ul>
                                                <li><span class="icon icon-map-marker"></span><span class="text">Cl. 63 Sur 87-16, Bogotá 110721, Colombia </span></li>
                                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                                            </ul>
                                        </div>
                                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                                            <li class="ftco-animate"><a href="https://web.bewe.co/bet-barberia"><span class="icon-twitter"></span></a></li>
                                            <li class="ftco-animate"><a href="https://www.facebook.com/BET_-Barberia-Estilo-Tatuajes-462788604232210/"><span class="icon-facebook"></span></a></li>
                                            <li class="ftco-animate"><a href="https://www.instagram.com/bet.barbershop.29/"><span class="icon-instagram"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>



                    <!-- loader -->
                    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
                        </svg></div>


                    <script src="{{ asset('page/js/jquery.min.js') }}"></script>
                    <script src="{{ asset('page/js/jquery-migrate-3.0.1.min.js') }}"></script>
                    <script src="{{ asset('page/js/popper.min.js') }}"></script>
                    <script src="{{ asset('page/js/bootstrap.min.js') }}"></script>
                    <script src="{{ asset('page/js/jquery.easing.1.3.js') }}"></script>
                    <script src="{{ asset('page/js/jquery.waypoints.min.js') }}"></script>
                    <script src="{{ asset('page/js/jquery.stellar.min.js') }}"></script>
                    <script src="{{ asset('page/js/owl.carousel.min.js') }}"></script>
                    <script src="{{ asset('page/js/jquery.magnific-popup.min.js') }}"></script>
                    <script src="{{ asset('page/js/aos.js') }}"></script>
                    <script src="{{ asset('page/js/jquery.animateNumber.min.js') }}"></script>
                    <script src="{{ asset('page/js/bootstrap-datepicker.js') }}"></script>
                    <script src="{{ asset('page/js/jquery.timepicker.min.js') }}"></script>
                    <script src="{{ asset('page/js/scrollax.min.js') }}"></script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
                    <script src="{{ asset('page/js/google-map.js') }}"></script>
                    <script src="{{ asset('page/js/main.js') }}"></script>

</body>

</html>