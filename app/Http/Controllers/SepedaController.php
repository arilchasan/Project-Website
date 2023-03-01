<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Sepeda;
use Illuminate\Http\Request;

class SepedaController extends Controller
{
    // public function index()
    // {
  
    //     return view('sepeda',[
    //         "data" => Sepeda::all()
    //     ]); 
    // }
    // public function index(){
    //     $sepeda = DB::select("select * from sepedas");
    //     return view('sepeda',['data'=>$sepeda]);
    //     }

    public function index(){
    
        return view('sepeda',[
            'data' => Sepeda::filter(request(['search']))->paginate(12)->withQueryString(),
    ]);
        }

}
