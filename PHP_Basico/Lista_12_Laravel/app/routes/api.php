<?php

use App\Http\Controllers\Api\DocumentoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("documentos", function(){
    return \App\Models\Documento::paginate(10);
});

Route::get("documentos/request", function(Request $request){
    //return $request->all();
    dd($request->header("Warning"));
});


Route::get("documentos/index", [DocumentoController::class, 'index']);
Route::get("documentos/show/{id}", [DocumentoController::class, 'show']);
Route::post("documentos/store", [DocumentoController::class, 'store']);
Route::put("documentos/update/{id}", [DocumentoController::class, 'update']);
Route::delete("documentos/destroy/{id}", [DocumentoController::class, 'destroy']);
