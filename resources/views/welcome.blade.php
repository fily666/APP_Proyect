@extends('layouts.home')

@section('content')


<!-- content begin -->
<div id="content" class="no-bottom no-top">
    <div id="top"></div>

    <!-- section begin -->
    <section id="section-hero-5" aria-label="section-hero" class="full-height relative no-top no-bottom text-light" data-stellar-background-ratio=".2">
        <div class="overlay-solid">
            <div class="overlay-bg t80">
                <div class="center-y fadeScroll relative" data-scroll-speed="4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="spacer-double"></div>

                                <img src="images/misc/logo-1.png" alt="">
                                <div class="spacer-double"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-about" class="text-light" data-bgcolor="#252525">
        <div class="container relative">
            <div class="row">
                <div class="col-md-6">
                    <div class="pr20">
                        <img src="images/misc/pic-profile-3.jpg" class="img-auto img-rounded img-responsive" alt="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="spacer-half"></div>
                    <h5><span class="id-color">Quienes somos</span></h5>
                    <h2>A Quick Bio</h2>

                    <p>I am a website designer from London, with a strong focus in UI/UX design. I love to get new experiences and always learn from my surroundings. I've done more than 285 projects. You can check it through portfolio section on
                        this website. I looking forward to any opportunities and challenges. </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                </div>

                <div class="spacer-double"></div>
            </div>
        </div>
    </section>
</div>
<!-- section close -->

<!-- section begin -->
<section id="section-portfolio"></section>
<div class="containerr">
    <div class="split left">
        <h1 style=" color: #ffffff;">BARBERIA</h1>
        <a href="{{route('Barberia')}}" class="btn">VER MAS</a>
    </div>
    <div class="split right">
        <h1 style=" color: #ffffff;">TATTO</h1>
        <a href="{{route('Tattoo')}}" class="btn">VER MAS</a>
    </div>
</div>
<!-- section close -->


<!-- section begin -->
<section id="section-contact" class="text-light no-top no-bottom index-6" data-stellar-background-ratio=".2">
    <div class="overlay-gradient">
        <div class="overlay-bg t80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h5><span class="id-color">Tienes alguna pregunta?</span></h5>
                        <h2>Contactame aqui</h2>
                    </div>

                    <div class="col-md-8 col-md-offset-2 wow fadeInUp">
                        <div class="row">
                            <form name="contactForm" id='contact_form' class="s2" method="post" action='email.php'>
                                <div class="col-md-6">
                                    <div class="field-set">
                                        <input type='text' name='name' id='name' class="form-control" placeholder="Nombre">
                                        <div class="line-fx"></div>
                                    </div>

                                    <div class="field-set">
                                        <input type='text' name='email' id='email' class="form-control" placeholder="Correo">
                                        <div class="line-fx"></div>
                                    </div>

                                    <div class="field-set">
                                        <input type='text' name='phone' id='phone' class="form-control" placeholder="Telefono">
                                        <div class="line-fx"></div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <textarea name='message' id='message' class="form-control" placeholder="Escribe tu mensaje"></textarea>
                                        <div class="line-fx"></div>
                                    </div>
                                </div>

                                <div class="spacer-single"></div>

                                <div class="col-md-12 text-center">
                                    <div id='submit'>
                                        <input type='submit' id='send_message' value='Enviar' class="btn btn-custom">
                                    </div>
                                    <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                    <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                </div>
                            </form>
                        </div>

                        <div class="spacer-double"></div>

                        <div class="row text-center wow fadeInUp">
                            <div class="col-md-4">
                                <div class="wm-1"></div>
                                <i class="icon_mobile id-color size40 mb20"></i>
                                <h6 class="id-color">Telefono</h6>
                                <h4>(208) 333 9296</h4>
                            </div>

                            <div class="col-md-4">
                                <div class="wm-1"></div>
                                <i class="icon_house_alt id-color size40 mb20"></i>
                                <h6 class="id-color">Direccion</h6>
                                <h4>FACA#4586-dsfd</h4>
                            </div>

                            <div class="col-md-4">

                                <div class="wm-1"></div>
                                <i class="icon_mail_alt id-color size40 mb20"></i>
                                <h6 class="id-color">Correo</h6>
                                <h4>contact@profession.com</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
<!-- section begin -->
<section id="section-map" class="map-container no-top no-bottom" aria-label="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25214.351955908594!2d144.93916650352472!3d-37.81829399866787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sid!4v1606280383060!5m2!1sen!2sid" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>
<!-- section close -->

@endsection