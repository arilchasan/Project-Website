<?php

namespace App\Http\Controllers;

use App\Models\Sepeda;
use Illuminate\Http\Request;

class SepedaController extends Controller
{
    public function index()
    {
  
        return view('sepeda',[
            "data" => Sepeda::all()
        ]); 
    }
    
}
