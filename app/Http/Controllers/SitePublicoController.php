<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitePublicoController extends Controller
{
    public function paginaPrincipal(){
        return view('ViewPrincipal');
    }
    
    public function produtos(){
        return view('ViewProdutos');
    }
    public function informacoes(){
        return view('ViewInformacoes');
    }
    
}
