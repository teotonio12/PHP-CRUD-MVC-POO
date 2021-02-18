<?php

namespace Models;

use Config\Conn;

class BaseModels extends Conn
{

    public function create ($dados) :bool
    {
        return true;
    }

    public function update ($dados) :bool
    {
        return true;
    }

    public function delete ($dados) :bool
    {
        return true;
    }

    public function listAll ($dados) :bool
    {
        return true;
    }

    public function ListShow ($dados) :bool
    {
        return true;
    }
}
