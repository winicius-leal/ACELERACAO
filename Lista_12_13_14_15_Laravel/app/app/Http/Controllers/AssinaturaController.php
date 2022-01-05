<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestAssinaturaInsertUpdate;
use App\Models\Assinatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AssinaturaController extends Controller
{
    public function index(){
        $assinaturas = Assinatura::all();
        return view("Assinatura.assinaturaIndex", compact("assinaturas"));
    }
    public function create(){
        return view("Assinatura.assinaturaCreate");
    }
    public function store(RequestAssinaturaInsertUpdate $request){
        $request->validated($request->all());
        Assinatura::create($request->all());
        return redirect()->route('assinatura.index')->with('success', "Cadastro realizado com sucesso!");
    }
    public function show($id){
        $assinatura = Assinatura::findOrFail($id);
        return view("Assinatura.assinaturaShow", compact("assinatura"));
    }
    public function destroy($id){
        $assinatura = Assinatura::findOrFail($id);
        $assinatura->delete();
        return redirect()->route('assinatura.index')->with('danger', "Cadastro deletado com sucesso!");
    }
}
