<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
    	'user_id',
    	'product_id',
    	'basket_id',
    	'quantity',
    	'status',
    ];

	public function cartpro(){
		return $this->hasOne(Products::class, 'id', 'product_id');
	}
}
