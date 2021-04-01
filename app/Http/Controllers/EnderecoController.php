<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public function novoEndereco()
    {
       return view ('endereco.novoEndereco');
    }

    public function resultadoEndereco(Request $request)
    {
        $endereco = new Endereco();
        $endereco->cep = $request->cep;
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->save();

        return view('endereco.showEndereco', compact('endereco'));
    }

    public function listaEndereco()
    {
        $endereco = Endereco::all();
        return view('endereco.listaEnderecos', compact('endereco'));
    }

    public function editarEndereco($id)
    {
        $endereco = Endereco::where('id', $id )->first();
        return view('endereco.editarEndereco', compact('endereco'));
    }

    public function edicaoEndereco(Request $request)
    {
        $endereco = Endereco::where('id', $request->id)->first();
        $endereco->cep = $request->cep;
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->update();
        return redirect (route ('listaEndereco'));
    }

    public function excluirEndereco($id)
    {
        Endereco::destroy($id);
        return redirect (route ('listaEndereco'));
    }
}