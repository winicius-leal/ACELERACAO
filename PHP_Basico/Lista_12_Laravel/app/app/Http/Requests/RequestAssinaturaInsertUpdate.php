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
            //
        ];   
    }
}
