<?php

use App\Http\Controllers\PrincipalController;
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

Route::get('/', 'PrincipalController@principal')->name('site.principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobre-nos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function(){ return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', function(){ return 'fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'produtos';})->name('app.produtos');
});

Route::fallback(function(){
    return 'A página acessada não existe. <a href="'.route('site.principal').'"> Clique aqui </a> para voltar para a página principal';
});