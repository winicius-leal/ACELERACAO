<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestAnaliseInsertUpdate extends FormRequest
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
    public function messages()
    {
        return [
            
            'id_doc.required' => 'o campo id_doc é obrigatório.',
            
            'id_assinatura.required' => 'o campo id_assinatura é obrigatório.',
           
            'status.required' => 'o campo status é obrigatório.',

            'data_analise.required' => 'o campo data_analise é obrigatório.',

            'visualizadores.required' => 'o campo visualizadores é obrigatório.',
        ];   
    }
}
