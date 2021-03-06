<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use App\Resource;

use File;
class RecursoController extends Controller
{
    public function index()
    {
    	$recursos = Resource::all();
        //dd($recursos[0]->plans[0]->title);
    	return view('cms.recursos.index', compact('recursos'));
    }

    //CREAR RECURSO

    public function crearRecurso()
    {	
    	$membresias = Plan::all();
    	return view('cms.recursos.crear_recurso', compact('membresias'));
    }

    //GUARDAR RECURSO

    public function guardarRecurso(Request $request)
    {	


    	$file = $request->file('recurso_file');

    	$recurso = new Resource;

    	$recurso->titulo = $request->recurso_title;
    	$recurso->descripcion = $request->recurso_descripcion;
    	$recurso->precio = 180000;	
    	
    	if($file){
    	    $path = public_path() . '/recursos';
    	    $fileName = uniqid() . $file->getClientOriginalName();
    	    $moved = $file->move($path, $fileName);

    	    //verificamos que la imagen haya sido movida y guardamos la ruta
    	    if($moved){
    	        $recurso->recurso = $fileName;
    	        $recurso->save();
    	        $recurso->plans()->attach($request->get('recurso_membership'));
    	        
    	        
    	    }

    	    return back()->with('message', 'Recurso guardado correctamente');

    	} else {
    		$recurso->save();
            $recurso->plans()->attach($request->get('recurso_membership'));
            return back()->with('message', 'Recurso guardado correctamente');
    	}

    }

    public function editarRecurso ($id){
        $recurso = Resource::find($id);

        $m_relaciones = $recurso->plans;

        $membresias = Plan::all();
        return view('cms.recursos.editar_recurso', compact('recurso', 'membresias', 'm_relaciones'));
    }



    // ACTUALIZAR RECURSO

    public function actualizarRecurso(Request $request, $id)
    {
        $file = $request->file('recurso_file');
        
        $recurso = Resource::find($id);

        $recurso->titulo = $request->recurso_title;
        $recurso->descripcion = $request->recurso_descripcion;
        if($file){
            if($recurso->recurso){
                $fullpath = public_path() . '/recursos/' . $recurso->recurso;
                $deleted = File::delete($fullpath);
            }

            if(isset($deleted) || $recurso->recurso === null){

                //verificamos que el archivo exista
                if($file){
                    $path = public_path() . '/recursos';
                    $fileName = uniqid() . $file->getClientOriginalName();
                    $moved = $file->move($path, $fileName);
            
                    //verificamos que el archivo haya sido movido y guardamos la ruta
                    if($moved){
                        $recurso->recurso = $fileName;
                        $recurso->save();
                        $recurso->plans()->sync($request->get('recurso_membership'));

                        return back()->with('message', 'Recurso actualizado con éxito!');
                    }else {
                        return back()->with('error', 'No se pudo actualizar el recurso');
                    }
                }
            }
                
        } else {
            $recurso->save();
            
            $recurso->plans()->sync($request->get('recurso_membership'));
            return back()->with('message', 'Recurso actualizado con éxito!');
        }

    }

    public function descargarRecurso($id)
    {
        $recurso = Resource::find($id);

        $path = public_path() . '/recursos/' . $recurso->recurso;

        return response()->download($path);
    }

    public function obtenerRecurso($id)
    {
        $recurso = Resource::find($id);
        $titulo = $recurso->titulo;
        $description = $recurso->descripcion;
        $response = [ "titulo" => $titulo, "description" => $description ];
        return $response;
    }


    // ELIMINAR RECURSO


    public function eliminarRecurso($id)
    {
        $recurso = Resource::find($id);
        if($recurso->recurso){
            $fullpath = public_path() . '/recursos/' . $recurso->recurso;
            $deleted = File::delete($fullpath);
        }

        if(isset($deleted) || $recurso->recurso === null)
        {
            $recurso->delete();
            return back()->with('error', 'Recurso eliminado correctamente');
        } else {
            return back()->with('error', 'No se pudo eliminar el recurso');
        }
    }
}
