<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'year',
        'price',
        'model',
        'country',
        'quantity',
        'cat_id',
        'created_at',
        'updated_at',
    ];
}
