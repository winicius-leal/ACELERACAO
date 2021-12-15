<?php

namespace App\Http\Controllers;

use App\Models\Assinatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AssinaturaController extends Controller
{
    public function index(){
        $assinaturas = Assinatura::all();
        return view("assinaturas", compact("assinaturas"));
    }
    public function exibe($id){
        $assinatura = Assinatura::find($id);
        return view("assinatura", compact("assinatura"));
    }
}
