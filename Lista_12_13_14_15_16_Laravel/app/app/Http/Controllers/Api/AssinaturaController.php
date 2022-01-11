<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestAssinaturaInsertUpdate;
use App\Models\Assinatura;
use Illuminate\Http\Request;

class AssinaturaController extends Controller
{
    private $model;

    public function __construct(Assinatura $model)
    {
        $this->model = $model;
    }
     
    function index(){

        $assinaturas = $this->model;
        return response()->json($assinaturas->paginate(8));
    }

    public function store(RequestAssinaturaInsertUpdate $request){
        Assinatura::create($request->all());
        return response()->json(["code"=>"200","msg"=>"assinatura criada com sucesso"]);
    }

    public function show($id){
        $assinatura = Assinatura::find($id);
        if(!$assinatura){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        
        return response()->json($assinatura);
    }

    public function destroy($id){
        $assinatura = Assinatura::find($id);
        if(!$assinatura){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        $assinatura->delete();
        return response()->json(["code"=>200,"msg"=>"assinatura removido com sucesso"]);
    }
    public function update(RequestAssinaturaInsertUpdate $request , $id){
        $assinatura = Assinatura::find($id);
        if(!$assinatura){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        $assinatura->update($request->all());
        return response()->json(["code"=>200,"msg"=>"assinatura alterado com sucesso"]);
    }

}
