<?php

use App\Http\Controllers\AksesorisController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
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
Route::get('/home', [GlobalController::class, 'index']);
Route::get('/sepeda',[SepedaController::class, 'index']); 

Route::get('/garansi', function () {
    return view('garansi');
});
Route::get('/aksesoris',[AksesorisController::class, 'index']);

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/profile', [GlobalController::class, 'profile'])->middleware('auth');     
Route::get('/detail', [GlobalController::class, 'detail']);
Route::get('/keranjang', [GlobalController::class, 'keranjang'])->middleware('auth');


//register route
Route::group(["prefix" => "/register"], function () {
    // Route::get('/all' ,[Register::class,'index'])->middleware('guest');
    Route::get('/create', [Register::class, 'create']);
    Route::post('/add', [Register::class, 'store']);
    Route::get('/edit/{user}', [Register::class, 'edit']);
    Route::post('/update/{user}', [Register::class, 'update']);    
});

Route::get('/register' ,[Register::class,'index'])->middleware('guest');


//login route
Route::get('/login', [Login::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/au', [Login::class,'authent']);

Route::post('/logout', [Login::class, 'logout']);

