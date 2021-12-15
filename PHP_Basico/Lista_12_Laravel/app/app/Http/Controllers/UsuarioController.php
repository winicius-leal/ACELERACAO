<?php

namespace App\Http\Controllers;

use App\Models\{Usuario,Documento};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UsuarioController extends Controller
{
    public function index(){

        $usuario = new Usuario("Wiinciius", 21);   
        $perfil = $usuario->getDados();

        $documento = Documento::all();

        Log::channel("documentos")->info("dados buscados com sucesso");

        return view("perfil", compact("perfil", "documento"));

    }
}
