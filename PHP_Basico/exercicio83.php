<?php

use Funcionario as GlobalFuncionario;

interface Funcionario{
    public function funcao();
}
class Designer implements Funcionario{
    public function funcao(){
        return "designer";
    }
}
class Tester implements Funcionario{
    public function funcao(){
        return "tester";
    }
}
class Programmer implements Funcionario{
    public function funcao(){
        return "programmer";
    }
}
class Company{
    public function createSoftware(Funcionario $funcionario){
        return $funcionario->funcao();
    }
}

