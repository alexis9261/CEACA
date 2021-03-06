@extends('cms')

@section('content')
<section>
<div class="row mt-4">
<h4>Revistas</h4>
    <button type="button" class="btn btn-sm btn-outline-success col-auto ml-auto mr-4" data-toggle="modal" data-target="#modalRevista">Agregar Revista</button>
</div>
<hr>
  @if(session('message'))
        <div class="alert alert-success my-3" role="alert">
          {{session('message')}}
        </div>
  @endif

  @if(session('error'))
        <div class="alert alert-danger my-3" role="alert">
          {{session('error')}}
        </div>
  @endif
  
</section>
	  <table class="table table-striped table-sm">
	    <thead>
	      <tr>
	        <th>#</th>
          <th>Portada</th>
	        <th>Titulo</th>
	        <th>Fecha</th>
	        <th>Acciones</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($revistas as $revista)
	        <tr>
	          <td>{{$revista->id}}</td>
            <td>
              <img src="{{asset('revista/portada/'. $revista->portada)}}" width="50px">
            </td>
	          <td>{{$revista->titulo}}</td>
	          <td>{{$revista->created_at}}</td>
	          <td class="d-flex ">
              <a href="/descargar/revista/{{$revista->id}}" class="btn btn-sm btn-outline-success mr-2">Descargar</a>
	            <button type="button" id="{{ $revista->id }}" class="btn btn-sm btn-outline-success mr-2 editar"  data-toggle="modal" data-target="#modalRevistaEditar">Editar</button>
	            <form action="/cms/revista/eliminar/{{$revista->id}}" method="POST">
	              @csrf
	              <button type="button" class="btn btn-sm btn-outline-danger revista_eliminar" data-toggle="modal" data-target="#EliminarUsuarios">Eliminar</button>
	            </form>
	          </td>
	        </tr>
	      @endforeach
	    </tbody>
	  </table>

<div class="modal fade" id="modalRevista" tabindex="-1" role="dialog" aria-labelledby="modalRevista" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalRevista">Agregar Revista</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/cms/load/file" id="form_revista" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <h5>Titulo</h5>
            <input class="form-control" id="revista_title" type="text" name="revista_name" placeholder="Titulo Revista" maxlength="191">
          </div>
          <div class="form-group">
            <h5>Portada</h5>
            <input type="file" id="revista_portada" name="revista_portada">
          </div>
          <div class="form-group">
            <h5>Archivo</h5>
            <input type="file" id="revista_file" name="revista_file">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" id="agregarRevista">Subir Revista</button>
      </div>
    </div>
  </div>
</div>

<!--Modal editar  -->
<div class="modal fade" id="modalRevistaEditar" tabindex="-1" role="dialog" aria-labelledby="modalRevistaEditar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Revista</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/cms/edit/file" id="form_revista_editar" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <h5>Titulo</h5>
            <input class="form-control" id="editar_revista_title" type="text" name="revista_name" placeholder="Titulo Revista" maxlength="191">
          </div>
          <div class="form-group">
            <h5>Portada</h5>
            <input type="file" id="revista_portada" name="revista_portada">
          </div>
          <div class="form-group">
            <h5>Archivo</h5>
            <input type="file" id="revista_file" name="revista_file">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" id="actualizarRevista">Actualizar Revista</button>
      </div>
    </div>
  </div>
</div>

<!--Modal eliminar  -->
  
<div class="modal fade" id="EliminarUsuarios" tabindex="-1" role="dialog" aria-labelledby="EliminarUsuarios" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">¿Seguro que desea Eliminar esta revista?</h5>
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

  
  let eliminarButtons = document.querySelectorAll('.revista_eliminar');
  let formModal = document.getElementById('modal_eliminar_usuario_form')
  let submitEliminar = document.getElementById('submitModalEliminar');


  submitEliminar.addEventListener('click', () => {
    formModal.submit();
  }); 

  if(eliminarButtons)
  {
    eliminarButtons.forEach(button => {
      button.addEventListener('click', (e) =>{
        e.preventDefault();
        

        formPadre = e.target.parentNode;
        console.log(formPadre);

        formModal.action = formPadre.action
      });
    });
  }


	document.querySelector('#agregarRevista').addEventListener('click', (e) =>{
    let formulario = document.getElementById('form_revista')
    let revistaName = document.getElementById('revista_title')
    let resvitaFile = document.getElementById('revista_file')
    e.preventDefault()

    console.log('entrando')

		if (!validarRevita(revistaName, resvitaFile)){
      return; 
    }

    let archivo = resvitaFile.files[0]


    if(archivo)
    {
        formulario.submit();
    }

	});

  const validarRevita = (title,file) => {  
    if(title.value === ""){
      alert('Debe agregar un titulo')
      return false
    } else if (file.files.length <= 0){
      alert('Debe agregar un archivo')
      return false
    } else {
      return true;
    }
  }
</script>
<script type="text/javascript">
  let revistaEditSubmit = document.querySelectorAll('.editar')
  let editarSubmit = document.getElementById('actualizarRevista')
  let formEdit = document.getElementById('form_revista_editar')
  if(revistaEditSubmit){
    revistaEditSubmit.forEach( submit => {
      submit.addEventListener('click', (e) => {
          
          let id = e.target.parentNode.parentNode.children[0].textContent
          let editTitle = e.target.parentNode.parentNode.children[2].textContent;
          let modalEditTitle = document.getElementById('editar_revista_title')

          formEdit.action = `/cms/actualizar/revista/${id}`
          console.log(formEdit)
          
          modalEditTitle.value = editTitle
      });
    });
  }

  editarSubmit.addEventListener('click', () => {
    let titleEdit = document.getElementById('editar_revista_title');

    if(titleEdit.value.trim() == ''){
      return alert('Debes agregar un titulo')

    }

    formEdit.submit();
  });
</script>
@endsection