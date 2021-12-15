<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UsuarioController,DocumentoController,AssinaturaController};


Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfil', [UsuarioController::class,"index"]);

Route::get('/documento', [DocumentoController::class, 'index'])->name('documento.index');
Route::get('/documento/remover/{id}', [DocumentoController::class, 'destroy'])->name('documento.destroy');
Route::get('/documento/novo', [DocumentoController::class, 'create'])->name('documento.create');
Route::post('/documento/novo', [DocumentoController::class, 'store'])->name('documento.store');
Route::get('/documento/{id}', [DocumentoController::class, 'show'])->name('documento.show');

Route::get('/assinatura', [AssinaturaController::class, 'index'])->name('assinatura.index');
Route::get('/assinatura/remover/{id}', [AssinaturaController::class, 'destroy'])->name('assinatura.destroy');
Route::get('/assinatura/novo', [AssinaturaController::class, 'create'])->name('assinatura.create');
Route::post('/assinatura/novo', [AssinaturaController::class, 'store'])->name('assinatura.store');
Route::get('/assinatura/{id}', [AssinaturaController::class, 'show'])->name('assinatura.show');

