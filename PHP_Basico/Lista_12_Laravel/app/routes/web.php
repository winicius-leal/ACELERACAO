<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UsuarioController,DocumentoController,AssinaturaController};

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfil', [UsuarioController::class,"index"]);

Route::get('/documento/{id}', [DocumentoController::class, 'exibe'])->name('documento.exibe');

Route::get('/assinaturas', [AssinaturaController::class,"index"])->name('assinaturas.exibe');

Route::get('/assinatura/{id}', [AssinaturaController::class, 'exibe'])->name('assinatura.exibe');

