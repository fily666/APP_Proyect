@extends('layouts.home')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('page/images/bg-1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p><a href="{{ route('citas.create') }}" class="btn btn-primary btn-outline-primary px-4 py-2">Reservar ahora</a></p>

                <h2 class="mb-0 bread">Contactanos</h2>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Contactanos <i class="ion-ios-arrow-round-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex">
                <div style="width: 100%">
                    <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Cl.%2063%20Sur%2087-16,%20Bogot%C3%A1%20110721,%20Colombia+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        <a href="https://www.gps.ie/car-satnav-gps/">Sat Navs</a>
                    </iframe>
                </div>
            </div>
            <div class="col-md-6 py-md-5 pb-5 wrap-about pb-md-5 ftco-animate">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 logo">Contactenos</h2>
                        <p>B.E.T Barber Shop, barbería, estilo y tatuajes, apuesta por calidad y un excelente servicio</p>
                        <div class="block-23 mb-3" style="color: black;">
                            <ul>
                                <li><a href="#"><span class="icon icon-twitter" style="color: black;"></span><span class="text" style="color: black;"># B.T.E</span></a></li>
                                <li><a href="#"><span class="icon icon-facebook" style="color: black;"></span><span class="text" style="color: black;"># B.T.E</span></a></li>
                                <li><a href="#"><span class="icon icon-instagram" style="color: black;"></span><span class="text" style="color: black;"># B.T.E</span></a></li>
                                <li><a href="#"><span class="icon icon-map-marker" style="color: black;"></span><span class="text" style="color: black;">Cl. 63 Sur 87-16, Bogotá 110721, Colombia</span></a></li>
                                <li><a href="#"><span class="icon icon-phone" style="color: black;"></span><span class="text" style="color: black;">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope" style="color: black;"></span><span class="text" style="color: black;">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection