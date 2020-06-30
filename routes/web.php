<?php

use Illuminate\Support\Facades\Route;
use App\Subscriber;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
	return view('page_new.src.service');
});

Route::get('/ceaca', function() {
	return view('ceaca.index');
})->name('index');

Route::get('/nosotros', function () {
	return view('ceaca.nosotros');
})->name('nosotros');	

/* ----------------------------  RUTAS DE PRUEBA PARA EL CMS -----------------------*/ 

Route::middleware('auth')->group(function () {

	Route::get('/cms', 'CmsController@index');
	Route::get('/cms/subscriptores', 'CmsController@subscribersView' );
	Route::get('/cms/club', 'CmsController@clubView');
	Route::get('/cms/categorias', 'CmsController@categoryView');
	Route::get('/cms/informacion', 'InformationController@index');
	Route::get('/cms/servicios', 'ServicioController@index');
	Route::get('/cms/publicidades', 'PublicidadController@index');
	Route::get('/cms/cursos', 'CursoController@index');
	Route::get('/cms/slider/image', 'SliderImageController@index');
	Route::get('/cms/crear/usuario', 'UserController@index');

		/* ----------  RUTA USUARIOS CONTROLLADOR ---------*/ 
	Route::post('cms/guardar/usuario', 'UserController@crearUsuario');

		/* ----------  RUTA CLUB CONTROLLADOR ---------*/ 
	Route::post('/club/user/pause/{id}', 'ClubController@pauseClubMember');
	Route::post('/club/user/active/{id}', 'ClubController@activeClubMember');

		/* ----------  RUTA CATEGORIAS CONTROLLADOR ---------*/ 
	Route::get('cms/categoria/{id}', 'CategoryController@getCategory');
	Route::post('cms/categoria/create', 'CategoryController@createCategory');
	Route::post('cms/categoria/edit/{id}', 'CategoryController@editCategory');
	Route::post('cms/categoria/delete/{id}', 'CategoryController@deleteCategory');

		/* ----------  RUTA SERVICIOS CONTROLLADOR ---------*/ 
	Route::get('/cms/editar/servicio/{id}', 'ServicioController@editarServicio');
	Route::post('/cms/actualizar/servicio/{id}', 'ServicioController@actualizarServicio');
	Route::get('/cms/crear/servicios', 'ServicioController@crearServicio');
	Route::post('/cms/guardar/servicio', 'ServicioController@guardarServicio');
	Route::post('/cms/eliminar/servicio/{id}', 'ServicioController@eliminarServicio');

		/* ----------  RUTA PUBLICIDADES CONTROLLADOR ---------*/ 
	Route::get('/cms/crear/publicidad/{tipo}', 'PublicidadController@crearPublicidad');
	Route::post('/cms/guardar/publicidad', 'PublicidadController@guardarPublicidad');
	Route::post('/cms/actualizar/publicidad/{id}', 'PublicidadController@actualizarPublicidad');
	Route::post('/cms/actualizar/imagen/publicidad/{id}', 'PublicidadController@actualizarImagenPublicidad');
	Route::post('/cms/eliminar/publicidad/{id}', 'PublicidadController@eliminarPublicidad');

	/* ----------  RUTA PUBLICIDADES CONTROLLADOR ---------*/ 

	Route::get('/cms/crear/curso', 'CursoController@crearCurso');
	Route::post('/cms/guardar/curso', 'CursoController@guardarCurso');
	Route::get('/cms/editar/curso/{id}', 'CursoController@editarCurso');
	Route::post('/cms/actualizar/curso/{id}', 'CursoController@actualizarCurso');
	Route::post('/cms/actualizar/imagen/curso/{id}', 'CursoController@actualizarImagenCurso');
	Route::post('/cms/eliminar/curso/{id}', 'CursoController@eliminarCurso');

	/* ----------  RUTA PUBLICIDADES CONTROLLADOR ---------*/ 
	Route::post('/cms/guardar/informacion', 'InformationController@actualizarInformacion');

	/* ----------  RUTA IMAGENES SLIDER CONTROLLADOR ---------*/ 
	Route::get('/cms/crear/slider/image/{tipo}', 'SliderImageController@crearImageSlider');
	Route::post('/cms/guardar/slider/image', 'SliderImageController@guardarImageSlider');
});

/*------------------------------------ END --------------------------*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



