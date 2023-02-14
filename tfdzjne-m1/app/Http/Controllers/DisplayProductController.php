<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class DisplayProductController extends Controller
{
    public function soloproduct($id){
    	$product = Products::find($id);
    	return view('soloproduct', ['pro' => $product]);
    }
}
