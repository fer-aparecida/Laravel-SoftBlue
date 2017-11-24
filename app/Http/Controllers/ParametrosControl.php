<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParametrosControl extends Controller
{
    public function acessandoParametrosViaRequest(Request $request){
        $produtos = array("Php", "Java", "C", "ios", "Android");
        
        //if(isset($request->prodid)){
        if($request->has('prodid')){    
            $buffer = "Curso selecionado: " . $produtos[$request->prodid];
        }
        else{
            $buffer = "Nenhum curso selecionado";
        }
        
        return view('viewAcessandoParametros', compact('buffer'));
    }
    
    public function formularioExibir(){
        return view('viewFormularioExibir');
    }
    
    public function formularioReceber(Request $request){
        $buffer = "Via formulário: ";
        
        if(isset($request->nomeUsuario)){
            $buffer .= $request->nomeUsuario;
        }
       
        return view('viewFormularioReceber', compact('buffer'));
        
            
    }
}
