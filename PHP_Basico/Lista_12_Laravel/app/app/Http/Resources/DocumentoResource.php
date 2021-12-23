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
        //retorna dados como voce deseja na saida da resposta
        

        return parent::toArray($request);
        /*
        return [
            "id"=> $this->id,
            "title"=> $this->title,
            "informationExtra"=>"testando o resource para tratar a resposta"
        ];
        */
    }
}
