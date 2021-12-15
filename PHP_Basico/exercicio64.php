<?php

interface Servicos
{
    public function calculaSalario(int $diasTrabalhados, String $cargo);
    public function calculaSalarioMaisGratificacao(int $diasTrabalhados, String
    $valorGravacao);
}

class Funcionario implements Servicos
{
    public function calculaSalario(int $diasTrabalhados, String $cargo)
    {
        $salarioPadrao = 6500;
        $valorDoDiaTrabalhado = $salarioPadrao / 30;

        if ($diasTrabalhados >= 15) {
            return "Salário completo: R$" . $diasTrabalhados * $valorDoDiaTrabalhado . " Valor recebido por dia : R$" . $valorDoDiaTrabalhado;
        }

        return "Salario com desconto: R$" . ($valorDoDiaTrabalhado - ($valorDoDiaTrabalhado * 0.30)) * $diasTrabalhados  . "Valor recebido por dia: R$" . ($valorDoDiaTrabalhado - ($valorDoDiaTrabalhado * 0.30)); 

    }
    
    public function calculaSalarioMaisGratificacao(int $diasTrabalhados, String
    $valorGravacao)
    {
        $salarioPadrao = 4970;
        $valorDoDiaTrabalhado = $salarioPadrao / 30;

        if ($diasTrabalhados <= 9) {
            return "Salário completo + 20 %: R$" . (($valorDoDiaTrabalhado + ($valorDoDiaTrabalhado * 0.2)) * $diasTrabalhados)  . " Valor recebido por dia : R$" . ($valorDoDiaTrabalhado + ($valorDoDiaTrabalhado * 0.20));
        }
        if ($diasTrabalhados >= 10 && $diasTrabalhados <= 15 ) {
            return "Salário completo + 50 %: R$" . ($valorDoDiaTrabalhado + ($valorDoDiaTrabalhado * 0.50)) * $diasTrabalhados  . " Valor recebido por dia : R$" . $valorDoDiaTrabalhado + ($valorDoDiaTrabalhado * 0.50);
        }

        return $valorDoDiaTrabalhado * $diasTrabalhados ; 

    }

}

$funcionario = new Funcionario();
echo $funcionario->calculaSalario(14, "dev");
echo $funcionario->calculaSalarioMaisGratificacao(2, "nao entendi");