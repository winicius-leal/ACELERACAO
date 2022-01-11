<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Analise;
use App\Models\Assinatura;
use App\Models\Documento;
use Illuminate\Http\Request;

class RelatorioDeAnaliseController extends Controller
{
    function index(){
        $assinaturas = Assinatura::paginate(8);
        $documentos = Documento::paginate(8);
        $analises = Analise::paginate(8);
        return response()->json(["Assinaturas"=>$assinaturas, "Documentos"=>$documentos, "Analises"=>$analises], 200);
    }
}
