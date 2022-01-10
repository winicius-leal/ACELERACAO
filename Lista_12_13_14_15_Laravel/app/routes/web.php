<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UsuarioController,DocumentoController,AssinaturaController,AnaliseController};


Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfil', [UsuarioController::class,"index"])->name('usuario.index');
Route::get('/login', [UsuarioController::class, 'login'])->name('usuario.login');
Route::get('/logoff', [UsuarioController::class, 'logoff'])->name('usuario.logoff');


Route::get('/documento', [DocumentoController::class, 'index'])->name('documento.index');
Route::get('/documento/novo', [DocumentoController::class, 'create'])->middleware("verificaAutenticacao")->name('documento.create');
//Route::delete('/documento/remover/{id}', [DocumentoController::class, 'destroy'])->middleware("verificaAutenticacao")->name('documento.destroy');
//Route::get('/documento/editar/{id}', [DocumentoController::class, 'edit'])->middleware("verificaAutenticacao")->name('documento.edit');
//Route::put('/documento/editar/{id}', [DocumentoController::class, 'update'])->middleware("verificaAutenticacao")->name('documento.update');
Route::post('/documento/novo', [DocumentoController::class, 'store'])->middleware("verificaAutenticacao")->name('documento.store');
Route::get('/documento/{id}', [DocumentoController::class, 'show'])->name('documento.show');

Route::get('/assinatura', [AssinaturaController::class, 'index'])->name('assinatura.index');
//Route::delete('/assinatura/remover/{id}', [AssinaturaController::class, 'destroy'])->middleware("verificaAutenticacao")->name('assinatura.destroy');
//Route::get('/assinatura/editar/{id}', [AssinaturaController::class, 'edit'])->middleware("verificaAutenticacao")->name('documento.edit');
//Route::put('/assinatura/editar/{id}', [AssinaturaController::class, 'update'])->middleware("verificaAutenticacao")->name('documento.update');
Route::get('/assinatura/novo', [AssinaturaController::class, 'create'])->name('assinatura.create');
Route::post('/assinatura/novo', [AssinaturaController::class, 'store'])->name('assinatura.store');
Route::get('/assinatura/{id}', [AssinaturaController::class, 'show'])->name('assinatura.show');


Route::middleware("verificaAutenticacao")->group(function(){
    Route::delete('/documento/remover/{id}', [DocumentoController::class, 'destroy'])->name('documento.destroy');
    Route::delete('/assinatura/remover/{id}', [AssinaturaController::class, 'destroy'])->name('assinatura.destroy');
    Route::get('/documento/editar/{id}', [DocumentoController::class, 'edit'])->name('documento.edit');
    Route::put('/documento/editar/{id}', [DocumentoController::class, 'update'])->name('documento.update');

});

Route::resource('analises', AnaliseController::class);