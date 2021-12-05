@extends('layouts.home')

@section('content')

<section class="hero-wrap js-fullheight" style="background-image: url(page/images/bg-2.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
            <div class="col-lg-12 ftco-animate d-flex align-items-center">
                <div class="text text-center">
                    <span class="subheading">BIENVENIDOS A B.E.T</span>
                    <h1 class="mb-4">SOMOS PROFESIONALES</h1>
                    <p><a href="{{ route('citas.create') }}" class="btn btn-primary btn-outline-primary px-4 py-2">Reservar ahora</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-md text-center d-flex align-items-stretch">
                <div class="services-wrap d-flex align-items-center img" style="background-image: url(page/images/formen.jpg);">
                    <div class="text">
                        <h3>Barberia</h3>
                        <p><a href="{{route('Barberia')}}" class="btn-custom">Portafolio<span class="ion-ios-arrow-round-forward"></span></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-items-stretch">
                <div class="text-about py-5 px-4">
                    <h1 class="logo">
                        <a href="#"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>BET_ Barberia Estilo Tatuajes</a>
                    </h1>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <br>
                </div>
            </div>
            <div class="col-md text-center d-flex align-items-stretch">
                <div class="services-wrap d-flex align-items-center img" style="background-image: url(page/images/tattoo.jpg);">
                    <div class="text">
                        <h3>Tattoo</h3>
                        <p><a href="{{route('Tattoo')}}" class="btn-custom">Portafolio <span class="ion-ios-arrow-round-forward"></span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex">
            <div class="p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(page/images/bg-2.jpg);">
                    <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 py-md-5 pb-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section mb-4 mt-md-5">
                <span class="subheading">SOBRE NOSOTROS</span>
                    <h2 class="mb-4">Quienes somos</h2>
                </div>
                <div class="pb-md-5">
                    <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-6 py-md-5 pb-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section mb-4 mt-md-5">
                    <span class="subheading">SOBRE NOSOTROS</span>
                    <h2 class="mb-4">Historia</h2>
                </div>
                <div class="pb-md-5">
                    <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(page/images/bg-2.jpg);">
                    <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-team">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center pb-3">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h2 class="mb-4">Equipo de trabajo</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="carousel-team owl-carousel">
                    <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img" style="background-image: url(page/images/stylist-1.jpg);"></div>
                            <h2>Danica Lewis</h2>
                            <span class="position">Hair Stylist</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img" style="background-image: url(page/images/stylist-2.jpg);"></div>
                            <h2>Nicole Simon</h2>
                            <span class="position">Nail Master</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img" style="background-image: url(page/images/stylist-3.jpg);"></div>
                            <h2>Cloe Meyer</h2>
                            <span class="position">Director</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img" style="background-image: url(page/images/stylist-4.jpg);"></div>
                            <h2>Rachel Clinton</h2>
                            <span class="position">Hair Stylist</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img" style="background-image: url(page/images/stylist-5.jpg);"></div>
                            <h2>Dave Buff</h2>
                            <span class="position">Barber</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-2">
            <div class="col-md-6 text-center heading-section ftco-animate">
                <h2 class="mb-4">Destacados</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="page/images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <span>Stylist</span>
                        <h3><a href="project.html">Beard</a></h3>
                    </div>
                    <a href="page/images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="page/images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <span>Beauty</span>
                        <h3><a href="project.html">Haircut</a></h3>
                    </div>
                    <a href="page/images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="page/images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <span>Beauty</span>
                        <h3><a href="project.html">Hairstylist</a></h3>
                    </div>
                    <a href="page/images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="page/images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <span>Beauty</span>
                        <h3><a href="project.html">Haircut</a></h3>
                    </div>
                    <a href="page/images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="page/images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <span>Beauty</span>
                        <h3><a href="project.html">Makeup</a></h3>
                    </div>
                    <a href="page/images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="page/images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <span>Fashion</span>
                        <h3><a href="project.html">Model</a></h3>
                    </div>
                    <a href="page/images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="page/images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <span>Beauty</span>
                        <h3><a href="project.html">Makeup</a></h3>
                    </div>
                    <a href="page/images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="page/images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <span>Beauty</span>
                        <h3><a href="project.html">Makeup</a></h3>
                    </div>
                    <a href="page/images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection