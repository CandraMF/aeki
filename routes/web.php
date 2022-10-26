<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
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

Route::get('/', PageController::class)->name('home');
Route::get('/products', PageController::class)->name('products');
Route::get('/testimonials', PageController::class)->name('testimonials');
Route::get('/about', PageController::class)->name('about');
Route::get('/cart', PageController::class)->name('cart');
// Route::get('/cart/add/{id}', [CartController::class, 'add'])->name('cart');



