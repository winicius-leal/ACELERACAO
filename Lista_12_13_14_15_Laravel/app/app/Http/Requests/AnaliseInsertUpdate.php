<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnaliseInsertUpdate extends FormRequest
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
            "id_doc"=>"number|required",
            "id_assinatura"=>"number|required",
            "status"=>"required",
            "data_analise"=>"required",
            "visualizadores"=>"required|number"
        ];
    }
}
