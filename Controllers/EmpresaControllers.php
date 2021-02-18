<?php

require "Models/EmpresaModel.php";

class EmpresaControllers 
{

    private $empresaModels;
    
    public function __construct()
    {
        $this->empresaModels = new EmpresaModel();
    }

    public function create($request)
    {  
        echo $this->empresaModels->create($this->empresaModels->tabela,$this->empresaModels->colunas,$request);
    }

    public function update($request)
    {
        echo $this->empresaModels->update($this->empresaModels->tabela,$this->empresaModels->colunas,$request);
    }

    public function delete($request)
    {
        echo $this->empresaModels->delete($this->empresaModels->tabela,$this->empresaModels->colunas,$request);
    }

    public function listAll($request)
    {
        echo $this->empresaModels->listAll($this->empresaModels->tabela,$this->empresaModels->colunas,$request);
    }

    public function listShow($request)
    {
        echo $this->empresaModels->listShow($this->empresaModels->tabela,$this->empresaModels->colunas,$request);
    }
}
