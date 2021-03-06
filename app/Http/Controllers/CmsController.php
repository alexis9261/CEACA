<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Subscriber;
use App\Service_Category;
use App\Plan;
use App\Revista;
use App\Message;

class CmsController extends Controller
{
    public function index(){
    	$revistas = Revista::all();
        return view('cms.index')->with(compact('revistas'));
    }
    public function subscribersView(){
    	$subscriptores = Subscriber::all();
    	return view('cms.subscriptores')->with(compact('subscriptores'));
    }

    public function clubView(){
    	$users = User::all();
        $membresias = Plan::all();
    	return view('cms.club')->with(compact('users', 'membresias'));
    }

    public function informationView(){
    	return view('cms.informacion');
    }

    public function categoryView(){
    	$categorias = Service_Category::all();
    	return view('cms.categorias')->with(compact('categorias'));
    }
    public function membresiasView(){
    	$membresias = Plan::all();
    	return view('cms.membresias.membresias')->with(compact('membresias'));
    }

    public function mensajesView(){
        $mensajes = Message::all();
    	return view('cms.mensajes')->with(compact('mensajes'));
    }
}
