<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetoCadastroController extends Controller
{
    public function cadastro()
    {
       return view ('cadastro');
    }
    public function efetuarCadastro(Request $request)
    {
        // dd($request->all());
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $valor3 = $request->valor3;
        $valor4 = $request->valor4;

        return view('welcome', compact('valor1', 'valor2', 'resultado'));
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function resultadoCadastro()
    {
        return view('resultadoCadastro');
    }
    public function carregarLista()
    {
        return view('listaCadastrado');
    }
}
