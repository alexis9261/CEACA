@extends('cms')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Crear Curso</h1>
  </div>


  <div class="">
      @if(session('message'))
        <div class="alert alert-success" role="alert">
          {{session('message')}}
        </div>
      @endif
      <form action="/cms/actualizar/curso/{{$curso->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-12 mb-4">
            <label>Titulo</label>
            <input class="form-control" type="text" name="titulo_curso" value="{{$curso->titulo}}" placeholder="Titulo">
          </div>
          <div class="col-12 mb-4">
            <label>Descripción</label>
            <textarea class="form-control" name="descripcion_curso">{{$curso->descripcion}}</textarea>
          </div>
          <div class="col-12 mb-4">

          <div class="col-12 mb-4">
            <label style="display: block">Imagen</label>
            <input type="file" name="imagen_curso">
          </div>

          <div class="col-12 mb-4">
            <label>Categoria Curso</label>
            <select name="plan_curso" class="form-control form-control">
              @foreach($membresias as $membresia)
              <option value="{{$membresia->id}}" <?php if($curso->plan->id == $membresia->id) echo 'selected'?> >{{$membresia->title}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 mb-5">
            <input type="submit" class="btn btn-primary" value="Actualizar Curso">
          </div>
        </div>
      </form>
  </div>
</section>

@endsection