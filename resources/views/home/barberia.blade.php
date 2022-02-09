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
        <div class="row no-gutters d-flex justify-content-center">
            @foreach ($serv as $servicios)
            @if ($servicios->categoria_id == 1)
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon"><span class="flaticon-male-hair-of-head-and-face-shapes"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">{{ $servicios->title }}</h3>
                        <p>{{ $servicios->detail }}</p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
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
        <div class="row no-gutters justify-content-center">
            @foreach ($port as $galery)
            @if ($galery->categoria_id == 1)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <img src="{{ $galery->imagen }}" class="img-fluid" alt="Colorlib Template">
                    <div class="text">
                        <span>{{ $galery->name }}</span>
                        <h3><a href="project.html">{{ $galery->categoria->name }}</a></h3>
                    </div>
                    <a href="{{ $galery->imagen }}" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            @endif
            @endforeach
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
                    @foreach ($expe as $equipo)
                    @if ($equipo->categoria_id == 1)
                    <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img"> <img src="{{ $equipo->foto }}" class="img"></div>
                            <h2>{{ $equipo->title }}</h2>
                            <span class="position">{{ $equipo->cargo }}</span>
                        </a>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


@endsection