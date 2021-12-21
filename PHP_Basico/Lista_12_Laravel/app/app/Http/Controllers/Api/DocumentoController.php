<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestDocumentoInsertUpdate;
use App\Models\Documento;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use League\CommonMark\Node\Block\Document;

class DocumentoController extends Controller
{
    function index(){
        $documentos = Documento::all();
       return response()->json($documentos);
    }

    public function store(Request $request){
        $documento = Documento::create($request->all());
        return response()->json($documento);
    }

    public function show($id){
        $documento = Documento::findOrFail($id);
        if(!$documento){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        return response()->json($documento);
    }

    public function destroy($id){
        $documento = Documento::findOrFail($id);
        if(!$documento){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        $documento->delete();
        return response()->json(["code"=>200,"msg"=>"documento removido com sucesso"]);
    }
    public function update(Request $request , $id){
        $documento = Documento::findOrFail($id);
        if(!$documento){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        $documento->update($request->all());
        return response()->json($documento);
    }
}
