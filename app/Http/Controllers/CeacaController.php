<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;
use App\Image_slider;
use App\Service_Category;
use App\Service;
use App\Info;
use App\Cat_capacitacion;
class CeacaController extends Controller
{
    public function index(){
		$info = Info::all();
		$cat_capacitaciones = Cat_capacitacion::All();
		$publicidad = Ads::all();
		$categorias = Service_Category::all();
		$servicios = Service::all();
    	$images = Image_slider::all();
    	return view('home')->with(compact('info','cat_capacitaciones','images','categorias','servicios','publicidad'));
    }
}
