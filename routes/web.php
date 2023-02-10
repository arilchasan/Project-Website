<?php

use App\Http\Controllers\AksesorisController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\SepedaController;
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

Route::get('/', [GlobalController::class, 'index']);
Route::get('/sepeda',[SepedaController::class, 'index']); 

Route::get('/garansi', function () {
    return view('garansi');
});
Route::get('/aksesoris',[AksesorisController::class, 'index']);

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/profile', function () {
    return view('profile');
});     
Route::get('/detail', [GlobalController::class, 'detail']);