@extends('cms')


@section('content')
<section>

  @if(session('message'))
  <div class="alert alert-danger my-4" role="alert">
    {{session('message')}}
  </div>
  @endif

  <div class="row align-items-center pt-3 pb-2 mb-3">
    <div class="col-md-10">
      <h1 class="h2">Encabezados</h1>
      <span  class="text-muted">Los encabezados corresponden a la imagen, titulo y contenido principal de las secciones: Quienes somos, Revista y Capacitaciones.</span>
    </div>
    <div class="col-md-2">
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <a href="/cms/crear/encabezado" type="button" class="btn btn-sm btn-outline-success">Agregar Encabezado</a>
        </div>
      </div>
    </div>
  </div>


  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Imagen</th>
          <th>Titulo</th>
          <th>Contenido</th>
          <th>Sección</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($encabezados as $encabezado)
        <tr>
          <td>{{$encabezado->id}}</td>
          <td>
            <img src="{{ asset('img/encabezados/'. $encabezado->imagen) }}" alt="" style="width: 40px; height: 40px;">
          </td>
          <td>{{$encabezado->titulo}}</td>
          <td>
            @php {{ $descripcion = substr($encabezado->descripcion,0,250); }} @endphp
            {{ $descripcion.'...' }}
          </td>
          <td>{{$encabezado->seccion}}</td>
          <td class="d-flex">
            <a href="/cms/editar/encabezado/{{$encabezado->id}}" class="btn btn-sm btn-outline-success mr-2 editar">Editar</a>
            <form action="/cms/eliminar/encabezado/{{$encabezado->id}}" method="POST">
              @csrf
              <button type="button" class="btn btn-sm btn-outline-danger encabezado_eliminar" data-toggle="modal" data-target="#EliminarUsuarios">Eliminar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>

<div class="modal fade" id="EliminarUsuarios" tabindex="-1" role="dialog" aria-labelledby="EliminarUsuarios" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">¿Seguro que desea eliminar este encabezado?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="modal_eliminar_usuario_form" method="POST">
          @csrf
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger px-4" id="submitModalEliminar">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  let eliminarButtons = document.querySelectorAll('.encabezado_eliminar');
  let formModal = document.getElementById('modal_eliminar_usuario_form')
  let submitEliminar = document.getElementById('submitModalEliminar');


  submitEliminar.addEventListener('click', () => {
    formModal.submit();
  });

  if (eliminarButtons) {
    eliminarButtons.forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();


        formPadre = e.target.parentNode;

        formModal.action = formPadre.action
      });
    });
  }
</script>
@endsection