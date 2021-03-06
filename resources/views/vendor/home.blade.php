@extends('layouts.main')

@section('head')
<title>Ceaca</title>
@endsection
@section('content')
@include('common.navbar')
{{-- carousel --}}
@include('home.carousel_principal')
<section class="section" id="pages">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <h2 class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
          Calderas Guía del Usuario
        </h2>
        <p class="text-muted text-center mb-5">
          REVISTA TÉCNICO-COMERCIAL ESPECIALIZADA EN CALDERAS. VERSIÓN TRIMESTRAL
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <a href="{{route('club')}}" class="card border-0 mb-3 mb-md-0">
          <div class="card-img-top" style="position:relative;">
            <img src="{{asset('img/img_button1.jpg')}}" alt="App landing" class="img-fluid" style="width:100%">
            <h2 class="card-title text-white" style="position: absolute;top:45%;left:25%;color:#fff!important;">
              CLUB CEACA
            </h2>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="{{route('servicios')}}" class="card border-0 mb-3 mb-md-0">
          <div class="card-img-top">
            <img src="{{asset('img/img_button2.jpg')}}" alt="App landing" class="img-fluid" style="width:100%">
            <h2 class="card-title text-white" style="position: absolute;top:45%;left:30%;">
              SERVICIOS
            </h2>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="/capacitacion?categoria=1" class="card border-0 mb-3 mb-md-0">
          <div class="card-img-top">
            <img src="{{asset('img/img_button3.jpg')}}" alt="App landing" class="img-fluid" style="width:100%">
            <h2 class="card-title text-white" style="position: absolute;top:45%;left:25%;">
              CAPACITACIÓN
            </h2>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

@include('home.section_magazine')
@include('home.modal_revista')

<section class="section bg-light">
  <div class="line line-top"></div>
  <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
  <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <h2 class="text-center mb-4">
          23 AÑOS SIRVIENDO CON CALIDAD
        </h2>
        <p class="text-muted text-center mb-5">
          EN TEMAS DE CONSULTORÍA Y CAPACITACIÓN EN TODA LATINOAMÉRICA
        </p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-3 text-center">
        <a href="{{route('nosotros')}}">
          <img src="{{asset('img/iconos/icono_1.png')}}" class="img-fluid" data-aos="fade-up" data-aos-duration="1000">
        </a>
        <h4 class="card-title mt-3 pt-3">
          <a href="{{route('nosotros')}}">
            QUIENES SOMOS
          </a>
        </h4>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <a href="{{route('servicios')}}">
          <img src="{{asset('img/iconos/icono_2.png')}}" alt="Carousel header" class="img-fluid" data-aos="fade-up" data-aos-duration="1000">
        </a>
        <h4 class="card-title mt-3 pt-3">
          <a href="{{route('servicios')}}">
            SERVICIOS TÉCNICOS
          </a>
        </h4>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <a href="{{route('club')}}">
          <img src="{{asset('img/iconos/icono_3.png')}}" alt="Carousel header" class="img-fluid" data-aos="fade-up" data-aos-duration="1000">
        </a>
        <h4 class="card-title mt-3 pt-3">
          <a href="{{route('club')}}">
            CLUB CEACA
          </a>
        </h4>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <a href="{{route('contacto')}}">
          <img src="{{asset('img/iconos/icono_4.png')}}" alt="Carousel header" class="img-fluid" data-aos="fade-up" data-aos-duration="1000">
        </a>
        <h4 class="card-title mt-3 pt-3">
          <a href="{{route('contacto')}}">
            CONTÁCTANOS
          </a>
        </h4>
      </div>
    </div>
  </div>

</section>
<!-- Video -->
@include('home.videos_publicitarios');
<!-- Publicidad -->
@include('home.publicidad_lateral')

@include('home.servicios_cat')

@endsection