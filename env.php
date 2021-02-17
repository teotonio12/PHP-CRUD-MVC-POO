<?php

namespace Env;

class Conn {

    private $host;
    private $dbname;
	private $user;
	private $senha;

    public function __construct()
    {
        $this->host = "localhost";
        $this->dbname = "testdb";
        $this->user = "root";
        $this->senha = "";

    }

    public function conectar (){
        try{
            return new \PDO("mysql:host=$this->host;dbname=$this->dbname","$this->user","$this->senha");
        } catch(\PDOException $e){
            echo $e->getMessage();
        }
    }
}