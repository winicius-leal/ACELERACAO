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
        $documentos = Documento::all();
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
}
