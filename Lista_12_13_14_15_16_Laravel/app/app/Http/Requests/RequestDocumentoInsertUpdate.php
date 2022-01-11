<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestDocumentoInsertUpdate extends FormRequest
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
            "title"=>"min:10|max:200|required",
            "sizeInMB"=>"min:1|max:3|required",
            "subscriptionNumber"=>"min:1|max:2|required",
            "signature"=>"min:10|max:200|required",
            "qntPages"=>"min:1|max:2|required",
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'o campo title é obrigatório.',
            'title.min' => 'o campo title é invalido.',
            'title.max' => 'o campo title é invalido.',
            'sizeInMB.required' => 'o campo sizeInMB é obrigatório.',
            'sizeInMB.min' => 'o campo sizeInMB é invalido.',
            'sizeInMB.max' => 'o campo sizeInMB é invalido.',
            'subscriptionNumber.required' => 'o campo subscriptionNumber é obrigatório.',
            'subscriptionNumber.max' => 'o campo subscriptionNumber é invalido.',
            'subscriptionNumber.min' => 'o campo subscriptionNumber é invalido.',
            'signature.required' => 'o campo signature é obrigatório.',
            'signature.min' => 'o campo signature é invalido.',
            'signature.max' => 'o campo signature é invalido.',
            'qntPages.required' => 'o campo qntPages é obrigatório.',
            'qntPages.max' => 'o campo qntPages é invalido.',
            'qntPages.min' => 'o campo qntPages é invalido.',
        ];   
    }
    
}
