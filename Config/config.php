<?php


require "env.php";

class Conn {

    private $host;
    private $dbname;
	private $user;
	private $senha;

    public function __construct()
    {
        $this->host = HOST;
        $this->dbname = DBNAME;
        $this->user = USER;
        $this->senha = SENHA;

    }

    public function conectar (){
        try{
            return new \PDO("mysql:host=$this->host;dbname=$this->dbname","$this->user","$this->senha");
        } catch(\PDOException $e){
            echo $e->getMessage();
        }
    }
}