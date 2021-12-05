@extends('layouts.home')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('page/images/bg-1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p><a href="{{ route('citas.create') }}" class="btn btn-primary btn-outline-primary px-4 py-2">Reservar ahora</a></p>

                <h2 class="mb-0 bread">Barberia</h2>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Barberia <i class="ion-ios-arrow-round-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="services-section ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-3">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">SERVICIOS</span>
            </div>
        </div>
        <div class="row no-gutters d-flex">
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon"><span class="flaticon-male-hair-of-head-and-face-shapes"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Haircut &amp; Styling</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon"><span class="flaticon-beard"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Beard</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon"><span class="flaticon-beauty-products"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Makeup</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon"><span class="flaticon-healthy-lifestyle-logo"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Body Treatment</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
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
                <span class="subheading">Gallery</span>
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

<section class="ftco-section ftco-team">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center pb-3">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">Profecionales</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate" style="text-align: -webkit-center;">
                <div class="carousel-team owl-carousel">
                    <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img" style="background-image: url(page/images/stylist-2.jpg);"></div>
                            <h2>Nicole Simon</h2>
                            <span class="position">Nail Master</span>
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


@endsection