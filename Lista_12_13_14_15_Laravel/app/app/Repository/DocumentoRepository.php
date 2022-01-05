<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DocumentoRepository{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;    
    }
    public function filterForFields(Request $request){
        $fields = $request->get("fields");
        return $this->model = $this->model->selectRaw($fields);
    }
    public function filterWithCondition(Request $request){
        $conditions = $request->get("conditions"); //id:=:5
        $expressions = explode(";", $conditions);//se houver mais de uma expressão separa por ponto e virgula
        
        /*foreach($expressions as $expression):
            $condition = explode('=', $expression); // id = 5
            $this->model->where($condition[0], $condition[1]);
        endforeach;*/

        foreach($expressions as $expression){
            $condition = explode(":", $expression); // ["0"=>"id","1"=>"=","2"=>"5"]
            $this->model->where($condition[0], $condition[1], $condition[2]);
        }
        return $this->model;
    }
}
?>