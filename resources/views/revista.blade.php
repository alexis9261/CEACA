@extends('layouts.main')

@section('head')
<title>Ceaca</title>
<style>
    .bg-revista {
        height: 100vh !important;
        width: 100%;
        background-position: center !important;
        /* Center the image */
        background-repeat: no-repeat !important;
        /* Do not repeat the image */
        object-fit: cover;
        background-size: cover !important;
    }

    .aux {
        height: 100vh;
        width: 100%;
    }

    @media only screen and (max-width: 600px) {
        .ver_en_linea {
            display: none;
        }
    }
</style>
@endsection
@section('content')
@include('common.navbar')
<section class="mb-5">
    <div class="container section pb-0">
        <div class="row align-items-center">
            <div class="col-12 col-md-7 order-md-2" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
                <img src="{{asset('img/banner_revista.jpg')}}" alt="Servicios de auditoria y mantenimiento en Calderas" class="img-fluid img-incline-left mb-5 mb-md-0">
            </div>
            <div class="col-12 col-md-5 order-md-1">
                <h1 class="mb-4 font-weight-bold" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
                    Guía del usuario - Revista Técnica
                </h1>
                <p class="mb-5 text-muted">
                    “Calderas…Guía del Usuario (en la industria y comercio)” es una Revista técnico-comercial especializada en Calderas, en versión digital, con una frecuencia trimestral.
                    Además cuenta con distribución gratuita entre todos los Usuarios de Calderas a nivel de Latinoamérica.
                </p>
                <!--a-- href="{{route('contacto')}}" class="btn btn-outline-primary">
                    Contáctanos <i class="fas fa-arrow-right ml-2"></i>
                </!--a-->
            </div>
        </div>
    </div>
</section>




<!-- publicidad -->
<section class="mt-5 pt-3">
    <!--a href="{{$publicidad[0]->url}}" target="_blank"-->
    <img src="{{asset('img/publicidad_revista.jpg')}}" alt="" width="100%" style="max-height:70vh;">
    <!--a-->
</section>

<section>
    <div class="container section pb-0">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 order-md-2 pl-md-4 border-left">
                <h6 class="title">
                    Nuestras ediciones
                </h6>
            </div>
            <div class="col-12 col-md-9 col-lg-10 order-md-1">
                @foreach ($revistas as $revista)
                <div class="row align-items-center text-nounderline">
                    <div class="col-12 col-md-3">
                        <img src="{{asset('revista/portada/'. $revista->portada )}}" alt="{{ $revista->titulo }}" class="img-fluid mb-3 mb-md-0">
                    </div>
                    <div class="col-12 col-md-9">
                        <h4>
                            {{ $revista->titulo }}
                        </h4>
                        <a href="/ver_revista/{{$revista->id}}" target="_blank" class="btn btn-sm btn-outline-success mt-2 ver_en_linea">Ver en linea</a>
                        <a href="#" class="btn btn-sm btn-success px-5 mt-2" data-toggle="modal" data-target=".modalRevista">Descargar</a>
                    </div>
                </div>
                <hr class="my-4">
                @endforeach
            </div>
        </div>
    </div>
</section>
<script type='text/javascript'>
    document.oncontextmenu = function() {
        return false
    }
    var iframe = document.getElementById("revista").children.oncontextmenu = function() {
        return false
    };
    //console.log(iframe)
</script>


@include('home.modal_revista')


@endsection