<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        $credenciais = $request->all(["email", "password"]);
        $token = auth("api")->attempt($credenciais);
        if(!$token){
            return response()->json(["voce nao é um usuario válido"], 401);
        }
        return response()->json(["token"=>$token]);
    }
}
