<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //definição: retorna dados como voce deseja na saida da resposta
        
        //retorna todos os atributos do request
        return parent::toArray($request);

        /* retorna os atributos selecionados da forma que deseja
        return [
            "id"=> $this->id,
            "title"=> $this->title,
            "informationExtra"=>"testando o resource para tratar a resposta"
        ];
        */
    }
}
