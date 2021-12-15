<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DocumentoController extends Controller
{
    function exibe($id){
        $documento = Documento::find($id);
        Log::channel("documentos")->info("documeno carregado com sucesso");
        return view("documento", compact("documento"));
    }
}
