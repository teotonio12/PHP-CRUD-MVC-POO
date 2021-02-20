<?php

require "Config/config.php";

class BaseModels extends Conn
{

    public function create () 
    {
        return "cadastrado com sucesso";
    }

    public function update () 
    {
        return "atualizado com sucesso";
    }

    public function delete () 
    {
        return "deletado com sucesso";
    }

    public function listAll () 
    {
        return "listagem de todos";
    }

    public function ListShow () 
    {
        return "listagem de 1";
    }
}
