<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnaliseInsertUpdate;
use App\Models\Analise;
use Illuminate\Http\Request;

class AnaliseController extends Controller
{
    private $model;

    public function __construct(Analise $model)
    {
        $this->model = $model;
        //aplicando middleware after para todas as rotas dessa controller
        $this->middleware('jwt.auth');
    }
     
    function index(){

        $analises = $this->model;
        return response()->json($analises->paginate(8));
    }

    public function store(AnaliseInsertUpdate $request){
        Analise::create($request->all());
        return response()->json(["code"=>"200","msg"=>"analise criada com sucesso"]);
    }

    public function show($id){
        $analise = Analise::find($id);
        if(!$analise){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        
        return response()->json($analise);
    }

    public function destroy($id){
        $analise = Analise::find($id);
        if(!$analise){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        $analise->delete();
        return response()->json(["code"=>200,"msg"=>"analise removido com sucesso"]);
    }
    public function update(AnaliseInsertUpdate $request , $id){
        $analise = Analise::find($id);
        if(!$analise){
            return response()->json(["code"=>500,"msg"=>"nao foi possivel encontrar o id fornecido"]);
        }
        $analise->update($request->all());
        return response()->json(["code"=>200,"msg"=>"documento alterado com sucesso"]);
    }
}
