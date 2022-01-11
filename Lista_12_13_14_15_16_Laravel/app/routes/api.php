<?php

use App\Http\Controllers\Api\{
    DocumentoController,
    AnaliseController,
    RelatorioDeAnaliseController,
    AssinaturaController,
    LoginController
};
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


//rota de login da api para pegar um token JWT 
Route::post("/login",[LoginController::class, "login"]);
// rota para logout da api e inserir o token JWT na blacklist
Route::get("/logout",[LoginController::class, "logout"]);
// rota para gerar novo token JWT
Route::get("/refresh",[LoginController::class, "refresh"]);

//rotas protegidas por middleware padrao do jwt auth que precisam do token
Route::group(["middleware"=>"jwt.auth"], function(){
    
    Route::get("documentos/index", [DocumentoController::class, 'index']);
    Route::get("documentos/show/{id}", [DocumentoController::class, 'show']);
    Route::post("documentos/store", [DocumentoController::class, 'store']);
    Route::put("documentos/update/{id}", [DocumentoController::class, 'update']);
    Route::delete("documentos/destroy/{id}", [DocumentoController::class, 'destroy']);
    
    Route::get("relatorios", [RelatorioDeAnaliseController::class, "index"]);
    
    Route::apiResource("analises", AnaliseController::class);
    
    Route::apiResource("assinaturas", AssinaturaController::class);
    
});






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::delete("documentos/destroy/{id}", [DocumentoController::class, 'destroy'])->middleware("auth.basic");
    
/*
Route::namespace('App\Http\Controllers\Api')->group(function(){
    Route::apiResource("/documentos","DocumentoController");
});
*/
