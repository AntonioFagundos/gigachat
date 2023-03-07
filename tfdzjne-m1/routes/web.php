<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('weare');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/weare', [App\Http\Controllers\WeAreController::class, 'wea'])->name('we'); // Страница "О нас"

Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'catalog'])->name('catalog'); // Страница "Каталог""

Route::get('/filter', [App\Http\Controllers\CatalogController::class, 'filter'])->name('filter');

Route::get('/wherefind', [App\Http\Controllers\CatalogController::class, 'wherefind'])->name('wherefind'); // Страница "Где нас найти"

Route::get('/soloproduct/{id}', [App\Http\Controllers\DisplayProductController::class, 'soloproduct'])->name('sp'); // Страница "Товары"

Route::get('/cart/{id}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart'); // Страница "Корзина"

Route::get('/cart', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart');

Route::get('/cart/minus/{id}', [App\Http\Controllers\CartController::class, 'removeCart'])->name('cartR');

Route::get('/cart/plus/{id}', [App\Http\Controllers\CartController::class, 'addQuantity'])->name('cartQ');