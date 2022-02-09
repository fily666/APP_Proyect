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
                        <a href="#"><span class="flaticon-scissors-in-a-hair-salon-badge"></span> <br> B.E.T <br> <br> Barber Shop, barbería, estilo y tatuajes, apuesta por calidad y un excelente servicio</a>
                    </h1>
                    <p> . </p>
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
                    <p>Estamos consiguiendo nuestro sueño de ser cada día más y mejores y estamos ampliado nuestra familia para dar un mejor servicio. Seguimos teniendo sueños y queremos que cualquiera que piense en cortarse el pelo o arreglarse la barba piense en nosotros. </p>
                    <p>Vamos a estar a la altura de las expectativas de todos nuestros clientes porque nos seguimos formando, reinventando, para ser cada día mejores profesionales, pero sobretodo, mejores personas.</p>
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
                    <p>Cada barbero y tatuador tiene su propia técnica. Los utensilios básicos para la elaboración de sus trabajos son usados de distintas maneras. </p>
                    <p>Hay barberos que hacen su trabajo solamente con tijeras y barbera de hojillas. Otros con las máquinas y sus distintos niveles de corte. No hay una técnica obligatoria. </p>
                    <p>Los tatuadores pueden trabajar con máquinas de boina o rotativas. Esta última es la que más se usa por su precisión, menor ruido y con un maltrato inferior es más amigable con el cliente. Así mismo con las cantidades de agujas. </p>
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
            <div class="col-md-12 ftco-animate" style="text-align: -webkit-center;">
                <div class="carousel-team owl-carousel">

                    @foreach ($experto as $equipo)
                    <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img"> <img src="{{ $equipo->foto }}" class="img"></div>
                            <h2>{{ $equipo->title }}</h2>
                            <span class="position">{{ $equipo->cargo }}</span>
                        </a>
                    </div>
                    @endforeach

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
        <div class="row no-gutters justify-content-center">
            @foreach ($portafolio as $galery)
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
            @endforeach
        </div>
    </div>
</section>



@endsection