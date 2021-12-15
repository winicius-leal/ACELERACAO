<?php

interface PersistenciaDB{
    public function insert();
    public function update();
    public function delete();
}
class MySQLDatabase implements PersistenciaDB{
    public function insert(){}
    public function update(){}
    public function delete(){}
}

class BudgeReport{
    
    public function open($date){

    }
    public function save(PersistenciaDB $persistencia){
        
    }
}