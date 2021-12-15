<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UsuarioController,DocumentoController,AssinaturaController};


Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfil', [UsuarioController::class,"index"]);

Route::get('/documento/{id}', [DocumentoController::class, 'exibe'])->name('documento.exibe');

Route::get('/assinaturas', [AssinaturaController::class,"index"])->name('assinaturas.exibe');

Route::get('/assinatura/{id}', [AssinaturaController::class, 'exibe'])->name('assinatura.exibe');

