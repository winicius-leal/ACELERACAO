<?php

namespace App\Http\Controllers;

use App\Models\Analise;
use Illuminate\Http\Request;

class AnaliseController extends Controller
{
    public function index(){
        $analises = Analise::all();
        return view("Analise.analiseIndex", compact("analises"));
    }
    public function create(){
        return view("Analise.analiseCreate");
    }
    public function store(Request $request){
        $request->validated($request->all());
        Analise::create($request->all());
        return redirect()->route('analises.index')->with('success', "Cadastro realizado com sucesso!");
    }
    public function show($id){
        $analises = Analise::findOrFail($id);
        return view("Analise.analiseShow", compact("analises"));
    }
    public function destroy($id){
        $analises = Analise::findOrFail($id);
        $analises->delete();
        return redirect()->route('analises.index')->with('danger', "Cadastro deletado com sucesso!");
     }
}
