<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class verificaAutenticacao
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has("usuario")){
            return redirect()->route("usuario.index")->with("danger", "Para deletar, criar ou editar é necessario fazer login");
        }
        return $next($request);
    }
}
