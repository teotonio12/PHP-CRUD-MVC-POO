<?php

require "App/Models/EmpresaModel.php";
require "App/Controllers/CreateSql.php";

class EmpresaControllers extends CreateSql
{

    private $empresaModels;
    
    public function __construct()
    {
        $this->empresaModels = new EmpresaModel();
    }

    public function create($request)
    {  
        $sql = $this->sqlCreate($this->empresaModels->tabela,$this->empresaModels->colunas); 

        echo $this->empresaModels->create($sql ,$request);
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
