<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartList(){

    	$cartItems = Cart::get();
        return view('cart', compact('cartItems'));
    }

    public function addToCart($product_id){

    	$user_id = Auth::User()->id;

    	$cartItems = Cart::create([
    		'user_id' => $user_id,
    		'product_id' => $product_id,
			'status' => 0,
    		'basket_id' => 0,
    		'quantity' => 1,
    	]);
    	$cart = Cart::where('user_id', $user_id)->get();
    	return view('cart', ['Cart'=>$cart]);
    }

    public function removeCart(Request $req){

    	$cartItems = Cart::remove($req->id);

    	return view('cart', ['Cart'=>$cartItems]);
    }

}
