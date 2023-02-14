<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class WeAreController extends Controller
{
    public function wea()
    {
    	$product = Products::all();
    	return view('weare', ['Products' => $product]);
    }}
