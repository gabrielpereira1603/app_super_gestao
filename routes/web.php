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

Route::get('contato', 'ContatoController@contato')->name('site.contato');
Route::post('contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function(){return 'Login';})->name('site.login');

//AGRUPAR ROUTAR COM O PREFIXO /APP 
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');    
});

Route::fallback(function() {
     echo 'A rota acessada nao existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a pagina principal';
});

//PASSANDO PARAMETROS PARA OS CONTROLADORES
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');


//REDIRECIONAMENTO DE ROTA
// Route::get('/rota1', function() {
//     echo 'rota 1';
// })->name('site.rota1');

// Route::get('/rota2', function() {
//     return redirect()->route('site.rota1');
// })->name('site.rota2');
