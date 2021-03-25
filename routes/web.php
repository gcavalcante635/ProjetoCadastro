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

Route::get ('/', 'App\Http\Controllers\ProjetoCadastroController@welcome')->name('welcome');

Route::get ('/cadastro', 'App\Http\Controllers\ProjetoCadastroController@cadastro')->name('carregarCadastro');
Route::post ('/efetuar-cadastro', 'App\Http\Controllers\ProjetoCadastroController@efeturarCadastro')->name('cadastrar');
Route::get ('/resultado-cadastro', 'App\Http\Controllers\ProjetoCadastroController@resultadoCadastro')->name('cadastrado');

Route::get ('/carregar-lista', 'App\Http\Controllers\ProjetoCadastroController@carregarlista')->name('listaCadastros');

