<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('/sepeda',[SepedaController::class, 'index']); 

Route::get('/garansi', function () {
    return view('garansi');
});

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/detail', function () {
    return view('sepeda.detail');
});