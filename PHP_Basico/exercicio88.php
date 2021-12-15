<?php 

interface Repository{
    public function adicionarCliente();
}
class ClienteRepository implements Repository{
    public function adicionarCliente()
    {
        echo "Cliente cadastrado com sucesso";
    }
}

class ClienteService{

    private $clienteRepository;
    private $cliente;

    public function addClienteRepository(Repository $clienteRepository){
        $this->clienteRepository = $clienteRepository;
    }

    public function adicionarCliente(){

        if (!$this->cliente->is_valid()) {
            echo "dados invalidos";
        }

        $this->clienteRepository->adicionarCliente();
    }
}