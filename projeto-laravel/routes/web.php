<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;


Route::get('/', function () {
    return view('welcome');
});

//Páginas
Route::get('/', [MainController::class, 'principal'])->name('site.index');
Route::get('/sobre', [SobreNosController::class, 'sobre'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){ return 'login';})->name('site.login');

//Requisições
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores',[FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'produtos';})->name('app.produtos');
});


Route::get('/teste/{p1}/{p2}',[TesteController::class,'teste'])->name('site.teste');


Route::fallback(function(){
    echo 'A rota acessada não existe.</br> <a href="' .route('site.index'). '">Clique aqui </a> Para ser redirecionado a página inicíal';
});
