<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    public function cadastro()
    {
       return view ('cadastro');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function resultadoCadastro(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->save();

        return view('usuario.show', compact('usuario'));
    }

    public function carregarLista()
    {
        $usuario = Usuario::all();
        return view('listaCadastrado', compact('usuario'));
    }

    public function editarUsuario($id)
    {
        $usuario = Usuario::where('id', $id )->first();
        return view('usuario.editar', compact('usuario'));
    }


    public function salvarEdicao(Request $request)
    {
        $usuario = Usuario::where('id', $request->id)->first();
        $usuario->nome = $request->nome;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->senha = $request->senha;
        $usuario->matricula = $request->matricula;
        $usuario->update();
        return redirect (route ('listaCadastros'));
    }

    
    public function excluirUsuario($id)
    {
        Usuario::destroy($id);
        return redirect (route ('listaCadastros'));
    }

    
}