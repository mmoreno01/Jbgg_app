@extends('layout')

@section('content')
<!-- imagen principal -->
    <div id="content-title-letter" class=" parallax uk-height-large uk-background-cover uk-light uk-flex uk-flex-top wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" uk-parallax="bgy: -200" style="background-image: url('imagenes/Master-Servicios-assets/Newsletter.jpg');">
        <div class="overlay"></div>
        <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s" uk-parallax="y: 100,0">Newsletter</h1>
    </div>
<!-- fin de la imagen principal -->

<!--seccion newsletter -->
<section id="card-letter" class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="imagenes/home/Img-Blog.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Mobirama</h5>
                        <p class="card-text">Te invitamos a conocer las tendencias más relevantes referentes a los sectores Payroll, Capital Humano y Legal/Fiscal de noviembre 2018.</p>
                        <a href="newsletter/Noviembre-2018.pdf" class="btn btn-primary"   target="_blank" >Ver más</a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="card">
                    <img src="imagenes/home-icons/img-muestra.svg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">card title</h5>
    g                   <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-md-4">
                <div class="card">
                    <img src="imagenes/home-icons/img-muestra.svg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">card title</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi voluptate, magni libero quidem optio numquam incidunt placeat reprehenderit</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- fin seccion newsletter -->


@endsection