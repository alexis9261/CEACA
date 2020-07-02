@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
		<h2 class="my-3">
			Crear Imagen Slider
		</h2>
		@if(session('message'))
		  <div class="alert alert-success" role="alert">
		    {{session('message')}}
		  </div>
		@endif
		<form action="/cms/guardar/slider/image" class="col-md-6" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<h5>Titulo</h5>
				<input type="text" name="slider_titulo" placeholder="Titulo..." class="form-control">
			</div>
			<div class="form-group">
				<h5>descripción</h5>
				<textarea class="form-control" name="slider_descripcion"></textarea>
			</div>
			<div class="form-group">
				<h5>Url</h5>
				<input type="text" name="slider_url" placeholder="Url..." class="form-control">
			</div>
			<div class="form-group">
				<h5>Orden</h5>
				<input type="text" name="slider_orden" placeholder="Orden..." class="form-control">
			</div>
			<div class="form-group">
				<h5>Imagen</h5>
				<input type="file" name="slider_imagen">
			</div>
			<input type="submit" class="btn btn-primary btn-sm" value="Crear Slider">
		</form>
	</div>
</section>


@endsection