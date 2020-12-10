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

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){return 'login';});


Route::prefix('/app')->group(function(){

    Route::get('/clientes', function(){return 'clientes';});
    Route::get('/fornecedores', 'FornecedorController@index');
    Route::get('/produtos', function(){return 'produtos';});

});





// Rota de contigência, avisa para o usuário caso seja digitada uma rota inexistente.
Route::fallback(function(){
    echo 'Endereço inexistente. <a href="'.route('site.index').'">Clique aqui para voltar</a>';
});