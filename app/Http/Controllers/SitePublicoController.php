<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitePublicoController extends Controller
{
    public function paginaPrincipal(){
        $usuario = "André";
        return view('ViewPrincipal')->with('usuario',$usuario);
    }
    
    public function produtos(){        
        $produtos = array("TV", "Celular", "Computador", "Fogão");        
        return view('ViewProdutos')->with('produtos',$produtos);
    }
    public function informacoes(){
        $usuario = "André";
        $produtos = array("TV", "Celular", "Computador", "Fogão");
        return view('ViewInformacoes', compact('usuario', 'produtos'));
        //return view('ViewInformacoes', ['usuario' => $usuario, 'produtos' => $produtos]);
    }
    
}
