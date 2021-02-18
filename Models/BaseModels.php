<?php

require "Config/config.php";

class BaseModels extends Conn
{

    public function create ($dados) 
    {
        return "cadastrado com sucesso";
    }

    public function update ($dados) 
    {
        return "atualizado com sucesso";
    }

    public function delete ($dados) 
    {
        return "deletado com sucesso";
    }

    public function listAll ($dados) 
    {
        return "listagem de todos";
    }

    public function ListShow ($dados) 
    {
        return "listagem de 1";
    }
}
