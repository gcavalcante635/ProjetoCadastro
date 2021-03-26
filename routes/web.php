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

Route::get ('/carregar-lista', 'App\Http\Controllers\CadastroController@carregarlista')->name('listaCadastros');



