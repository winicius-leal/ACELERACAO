<?php

use App\Http\Controllers\Api\DocumentoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Node\Block\Document;

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

Route::get("documentos/index", [DocumentoController::class, 'index']);
Route::get("documentos/show/{id}", [DocumentoController::class, 'show']);
Route::post("documentos/store", [DocumentoController::class, 'store']);
Route::put("documentos/update/{id}", [DocumentoController::class, 'update']);
Route::delete("documentos/destroy/{id}", [DocumentoController::class, 'destroy'])->middleware("auth.basic");

Route::post("/login",[LoginController::class, "login"]);

/*
Route::namespace('App\Http\Controllers\Api')->group(function(){
    Route::apiResource("/documentos","DocumentoController");
});
*/
