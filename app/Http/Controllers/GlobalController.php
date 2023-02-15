<?php

namespace App\Http\Controllers;

use App\Models\Sepeda;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function detail(){
        $sepeda = Sepeda::all();
        return view('sepeda.detail',['data'=>$sepeda]);
        }

    public function keranjang(){
    return view('keranjang.kerajang');
    }
}
