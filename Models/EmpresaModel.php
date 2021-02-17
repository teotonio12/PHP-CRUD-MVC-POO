<?php

use Env\Conn;

class EmpresaModel {

    private $conn;
    private $id_empresa;

    public function empresa ($conn, $id_empresa)
    {
       $this->conn = $conn;
       $this->id_empresa = $id_empresa;

       $sql = "SELECT * FROM empresas WHERE id_empresas = {$this->id_empresa}";

       $stmt= $this->conn->conectar()->prepare($sql);

       $stmt->execute();

       $empresas = $stmt->fetch(\PDO::FETCH_ASSOC);
       
        return $empresas;
      
    }
}