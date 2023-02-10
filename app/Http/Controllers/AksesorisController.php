<?php

namespace App\Http\Controllers;

use App\Models\Aksesoris;
use Illuminate\Http\Request;

class AksesorisController extends Controller
{
    public function index(){
        $aksesoris = Aksesoris::all();
        return view('aksesoris',['data_aksesoris'=>$aksesoris]);
     }
}
