<?php

require "App/Config/config.php";

class BaseModels extends Conn
{

    public function create (string $sql, array $request) 
    {
        return "cadastrado com sucesso";
    }

    public function update (string $sql, array $request) 
    {
        return "atualizado com sucesso";
    }

    public function delete (string $sql, array $request) 
    {
        return "deletado com sucesso";
    }

    public function listAll (string $sql, array $request) 
    {
        return "listagem de todos";
    }

    public function ListShow (string $sql, array $request) 
    {
        return "listagem de 1";
    }
}
