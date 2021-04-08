<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get ('/', 'App\Http\Controllers\CadastroController@welcome')->name('welcome');

Route::get ('/cadastro', 'App\Http\Controllers\CadastroController@cadastro')->name('carregarCadastro');
Route::post ('/resultado-cadastro', 'App\Http\Controllers\CadastroController@resultadoCadastro')->name('cadastrado');
Route::post ('/resultado-edicao', 'App\Http\Controllers\CadastroController@salvarEdicao')->name('resultadoEdicao');

Route::get ('/carregar-lista', 'App\Http\Controllers\CadastroController@carregarlista')->name('listaCadastros');
Route::get ('/usuario/editar/{id}', 'App\Http\Controllers\CadastroController@editarUsuario')->name('editarUsuario');
Route::get ('/excluir/{id}', 'App\Http\Controllers\CadastroController@excluirUsuario')->name('excluir');

// Rotas de Endereço
Route::get ('/novo-endereco', 'App\Http\Controllers\EnderecoController@novoEndereco')->name('novoEndereco');
Route::post ('/resultado-endereco', 'App\Http\Controllers\EnderecoController@resultadoEndereco')->name('resultadoEndereco');
Route::post ('/edicao-endereco', 'App\Http\Controllers\EnderecoController@edicaoEndereco')->name('edicaoEndereco');

Route::get ('/lista-endereco', 'App\Http\Controllers\EnderecoController@listaEndereco')->name('listaEndereco');
Route::get ('/endereco/editar/{id}', 'App\Http\Controllers\EnderecoController@editarEndereco')->name('editarEndereco');
Route::get ('/excluir-endereco/{id}', 'App\Http\Controllers\EnderecoController@excluirEndereco')->name('excluirEndereco');

// Route de cadastro de Usuarios com endereço
Route::prefix('usuario')->group(function (){
    Route::get('create', 'App\Http\Controllers\NovoController@create')->name('createUsuario');
    Route::post('save', 'App\Http\Controllers\NovoController@save')->name('saveUsuario');
});
