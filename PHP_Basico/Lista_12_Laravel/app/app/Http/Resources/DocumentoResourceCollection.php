<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DocumentoResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //retorna a coleção de dados de acordo com oque esta configurado na saida de DocumentoResource
        return [
            "data"=>$this->collection
        ];
    }
    /*
    public function with($request)
    {
        //retorna separado
        return [
            "extra_information"=>"testando"
        ];
    }
    */
}
