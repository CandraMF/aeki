<?php

use App\Http\Controllers\ContohControler;
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

Route::get('/asdasd', function () {
    return view('welcome');
});

// Route::get('/halaman1', [TamuController::class, ''])

Route::resource('contoh', ContohControler::class);

