<?php

require "Models/EmpresaModel.php";
require "App/CreateSql.php";

class EmpresaControllers extends CreateSql
{

    private $empresaModels;
    
    public function __construct()
    {
        $this->empresaModels = new EmpresaModel();
    }

    public function create()
    {  
        echo $this->empresaModels->create();
    }

    public function update()
    {
        echo $this->empresaModels->update();
    }

    public function delete()
    {
        echo $this->empresaModels->delete();
    }

    public function listAll()
    {
        echo $this->empresaModels->listAll();
    }

    public function listShow()
    {
        echo $this->empresaModels->listShow();
    }

}
