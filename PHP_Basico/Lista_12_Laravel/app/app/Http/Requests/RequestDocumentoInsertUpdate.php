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
            //
        ];   
    }
    
}
