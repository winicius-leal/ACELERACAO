<?php

namespace App\Http\Controllers;

use App\Models\{Usuario,Documento};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UsuarioController extends Controller
{
    public function index(){

        $usuario = new Usuario("Winicius Leal", 24);   
        $perfil = $usuario->getDados();
        return view("perfil", compact("perfil"));

    }
    public function login(){
        $usuario = new Usuario("Winicius Leal", 24);   
        $usuario = $usuario->getDados();
        session(["usuario"=>$usuario]);
        return redirect()->route("usuario.index")->with("success", "login efetuado com sucesso");
    }
    public function logoff(){
        session()->forget("usuario");
        return redirect()->route("usuario.index")->with("success", "logoff efetuado com sucesso");
    }
}
