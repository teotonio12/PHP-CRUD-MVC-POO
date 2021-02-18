<?php

namespace Models;

use Config\Conn;

require "Config/config.php";

class BaseModels extends Conn
{


    public function create (string $tabela, array $colunas ,array $dados) 
    {
        return " usuario cadastrado com sucesso";
    }

    public function update ($dados) 
    {

    }

    public function delete ($dados) 
    {
        
    }

    public function listAll ($dados) 
    {
        
    }

    public function ListShow ($dados) 
    {
      
    }
}
