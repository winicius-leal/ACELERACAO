<?php

    interface MovimentoConta{
        public function getCPFCorrentista():string;
        public function getValorMovimento():float;
    }

    interface OperacoesBanco {
        public function encontraCorrentista(array $todosCorrentistas, string $cpfProcurado):Correntista;
    }

    class Correntista{
        private string $cpfCliente;
        private float $saldo;

        public function __construct(string $cpfCliente, float $saldo){
            $this->cpfCliente = $cpfCliente;
            $this->saldo = $saldo;
        }

        public function getCpfCliente():string{
            return $this->cpfCliente;
        }

        public function getSaldo():float{
            return $this->saldo;
        }

        public function setSaldo(float $saldo):void{
            $this->saldo += $saldo;
        }
    }

    class Movimentacao implements MovimentoConta{
        private string $cpfCorrentista;
        private float $valorMovimento;

        public function __construct(string $cpfCorrentista, float $valor){
            $this->cpfCorrentista = $cpfCorrentista;
            $this->valorMovimento = $valor;
        }

        public function getCPFCorrentista():string{
            return $this->cpfCorrentista;
        }

        public function getValorMovimento():float{
            return $this->valorMovimento;
        }

        public function setValorMovimento(float $valor):void{
            $this->valorMovimento = $valor;
        }
    }

    class Operacoes implements OperacoesBanco{
        
        public function encontraCorrentista(array $todosCorrentistas, string $cpfProcurado):Correntista{
            foreach($todosCorrentistas as $correntista){
                if($correntista->getCpfCliente() == $cpfProcurado){
                    return $correntista;
                }
            }
            return null;
        }
    }
