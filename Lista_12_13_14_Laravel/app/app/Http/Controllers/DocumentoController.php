<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestDocumentoInsertUpdate;
use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use League\CommonMark\Node\Block\Document;

class DocumentoController extends Controller
{
    function index(){
        //$documentos = Documento::all();
        $documentos = Documento::paginate(15);
        Log::channel("documentos")->info("documeno carregado com sucesso");
        return view("Documento.documentoIndex", compact("documentos"));
    }
    public function create(){
        return view("Documento.documentoCreate");
    }
    public function store(RequestDocumentoInsertUpdate $request){
        $request->validated($request->all());
        Documento::create($request->all());
        return redirect()->route('documento.index')->with('success', "Cadastro realizado com sucesso!");
    }
    public function show($id){
        $documento = Documento::findOrFail($id);
        return view("Documento.documentoShow", compact("documento"));
    }
    public function destroy($id){
        $documento = Documento::findOrFail($id);
        $documento->delete();
        return redirect()->route('documento.index')->with('danger', "Cadastro deletado com sucesso!");
    }
    public function edit($id){
        $documento = Documento::findOrFail($id);
        //dd($documento);
        return view("Documento.documentoEdit", compact("documento"));
    }
    public function update(RequestDocumentoInsertUpdate $request , $id){
        $request->validated($request->all());        
        $documento = Documento::findOrFail($id);
        $documento->update($request->all());
        return redirect()->route('documento.index')->with('success', "Cadastro alterado com sucesso!");
    }
}
