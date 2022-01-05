<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestDocumentoInsertUpdate;
use App\Http\Resources\DocumentoResource;
use App\Http\Resources\DocumentoResourceCollection;
use App\Models\Documento;
use App\Repository\DocumentoRepository;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    private $model;

    public function __construct(Documento $model)
    {
        $this->model = $model;
    }

    function index(Request $request){

        $documentos = $this->model;

        $documentoRepository = new DocumentoRepository($documentos);

        if($request->has("fields")){
            $documentos = $documentoRepository->filterForFields($request);
        }
        if($request->has("conditions")){
            $documentos = $documentoRepository->filterWithCondition($request);
        }

        //$documentos = Documento::all();
        //$documentos = Documento::paginate(8);
       //return response()->json($documentos);
       return new DocumentoResourceCollection($documentos->paginate(8));
    }

    public function store(RequestDocumentoInsertUpdate $request){
        $documento = Documento::create($request->all());
        //return response()->json($documento);
        return response()->json(["code"=>"200","msg"=>"Documento criado com sucesso"]);
    }

    public function show($id){
        //$documento = Documento::findOrFail($id);
        $documento = Documento::find($id);
        
        if(!$documento){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        return new DocumentoResource($documento);
        //return response()->json($documento);
    }

    public function destroy($id){
        //$documento = Documento::findOrFail($id);
        $documento = Documento::find($id);
        if(!$documento){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        $documento->delete();
        return response()->json(["code"=>200,"msg"=>"documento removido com sucesso"]);
    }
    public function update(RequestDocumentoInsertUpdate $request , $id){
        //$documento = Documento::findOrFail($id);
        $documento = Documento::find($id);
        if(!$documento){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        $documento->update($request->all());
        //return response()->json($documento);
        return response()->json(["code"=>200,"msg"=>"documento removido com sucesso"]);
    }
}
