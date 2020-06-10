<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function createCategory(Request $request){

    	$categoria = new Category;
    	$categoria->name = $request->category_name;
    	$categoria->save();

    	return back();
    }

    public function deleteCategory(Request $requeest, $id){
    	$categoria = Category::find($id);
    	$categoria->delete();

    	return back();
    }

    public function getCategory(Request $request, $id){
    	$categoria = Category::find($id);

    	return $categoria;
    }

    public function editCategory(Request $request, $id){
    	$categoria = Category::find($id);
    	$categoria->name = $request->category_update;
    	$categoria->save();

    	return back();
    }
}