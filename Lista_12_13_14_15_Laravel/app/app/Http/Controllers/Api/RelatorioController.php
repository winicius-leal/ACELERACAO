<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Analise;
use App\Models\Assinatura;
use App\Models\Documento;
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    function index(){
        $assinaturas = Assinatura::paginate(8);
        $documentos = Documento::paginate(8);
        $analises = Analise::paginate(8);
        return response()->json(["Assinaturas"=>$assinaturas, "Documentos"=>$documentos, "Analises"=>$analises], 280);
    }

    public function store(Request $request){
    }

    public function show($id){
    }

    public function destroy($id){
    }
    public function update(Request $request , $id){
    }

}
