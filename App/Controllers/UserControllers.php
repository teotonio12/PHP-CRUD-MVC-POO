<?php

require "App/Models/UserModel.php";

class UserControllers 
{

    private $userModels;
    
    public function __construct()
    {
        $this->userModels = new UserModel();
    }

    public function create($request)
    {  
        echo $this->userModels->create($this->userModels->tabela,$this->userModels->colunas,$request);
    }

    public function update($request)
    {
        echo $this->userModels->update($this->userModels->tabela,$this->userModels->colunas,$request);
    }

    public function delete($request)
    {
        echo $this->userModels->delete($this->userModels->tabela,$this->userModels->colunas,$request);
    }

    public function listAll($request)
    {
        echo $this->userModels->listAll($this->userModels->tabela,$this->userModels->colunas,$request);
    }

    public function listShow($request)
    {
        echo $this->userModels->listShow($this->userModels->tabela,$this->userModels->colunas,$request);
    }
}
