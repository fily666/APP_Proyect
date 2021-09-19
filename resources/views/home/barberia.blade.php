@extends('layouts.home')

@section('content')

<!-- section begin -->
<section id="section-portfolio" class="text-light" data-bgcolor="#202020">
    <div class="container">

        <!-- portfolio filter begin -->
        <div class="row">

            <div class="col-md-12 text-center">
                <h5><span class="id-color">Portafolio</span></h5>
                <h2>BARBERIA</h2>
            </div>

            <div class="col-md-12 text-center mt50">
                <ul id="filters" style="color: white;">
                    <li><a href="#" data-filter="*" class="selected">all projects</a></li>
                    <li><a href="#" data-filter=".illustration">illustration</a></li>
                    <li><a href="#" data-filter=".mobile">mobile</a></li>
                    <li><a href="#" data-filter=".photography">photography</a></li>
                    <li><a href="#" data-filter=".website">website</a></li>
                </ul>

                <div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_3_cols grid sequence">

                    <!-- gallery item -->
                    @foreach ($portafolio as $articulo)
                    <div class="item illustration website gallery-item">
                        <div class="picframe wow">
                            <a class="image-popup" href="{{ $articulo->imagen }}">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">{{ $articulo ->name }}</span>
                                    </span>
                                </span>
                                <img src="{{ $articulo->imagen }}" alt="" />
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <!-- close gallery item -->  
                    
                </div>
            </div>
            <!-- portfolio filter close -->
        </div>
    </div>
</section>
<!-- section close -->
@endsection