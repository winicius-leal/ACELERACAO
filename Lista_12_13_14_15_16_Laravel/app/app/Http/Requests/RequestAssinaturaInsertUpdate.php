<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestAssinaturaInsertUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "qntCharactersSignature"=>"min:1|max:200|required",
            "defaultSignature"=>"min:10|max:200|required",
            "subscriptionNumberUsed"=>"min:1|max:2|required"
        ];
    }
    public function messages()
    {
        return [
            
            'qntCharactersSignature.required' => 'o campo qntCharactersSignature é obrigatório.',
            'qntCharactersSignature.min' => 'o campo qntCharactersSignature é invalido.',
            'qntCharactersSignature.max' => 'o campo qntCharactersSignature é invalido.',
            
            'defaultSignature.required' => 'o campo defaultSignature é obrigatório.',
            'defaultSignature.min' => 'o campo defaultSignature é invalido.',
            'defaultSignature.max' => 'o campo defaultSignature é invalido.',

            'subscriptionNumberUsed.required' => 'o campo subscriptionNumberUsed é obrigatório.',
            'subscriptionNumberUsed.max' => 'o campo subscriptionNumberUsed é invalido.',
            'subscriptionNumberUsed.min' => 'o campo subscriptionNumberUsed é invalido.',
            
        ];   
    }
}
