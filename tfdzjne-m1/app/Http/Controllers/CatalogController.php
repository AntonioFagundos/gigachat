<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class CatalogController extends Controller
{
    public function catalog()
    {
        $categ = Category::all();
    	$product = Products::all();
    	return view('catalog', ['Category' => $categ, 'Products' => $product]);
    }

    public function filter(Request $req){

    	$product = Products::where('cat_id', $req->category_filter)->orderBy($req->select_filter, 'desc')->get();
    	$categ = Category::all();
    	return view('catalog', ['Category' => $categ, 'Products' => $product]);

    }

    public function wherefind()
    {
    	return view('wherefind');
    }
}