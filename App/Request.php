<?php

class Request 
{

    public function __construct() 
    {
        $this->server = $_SERVER;
        $this->createdAttributes();
    }

    public function queryStringToArray ()
    {

            $array = isset($_GET) ? $_GET : $array = isset($_POST) ? $_POST : [];
        

        return $array;
    }

    public function createdAttributes()
    {
        $atributoValue = $this->queryStringToArray();

        foreach ($atributoValue as $key => $value) {
            $this->$key = $value;
        }
    }

    public function getVerbsRequest()
    {
        $verbo = $_SERVER['REQUEST_METHOD'];

        return $verbo;
    }

    public function getUri()
    {
      
        preg_match('/.*(?=\/)|.*(?=\/\?)|.*/',$this->server['REQUEST_URI'], $arrayUri);  
        //print_r($arrayUri);
        return $arrayUri;
            
    }


}

 

//  echo "<pre>";
//  var_dump($request->queryStringToArray());

//  echo "Objeto instanciado ".$request->nome_pessoa."<br>";

//  echo "verbo da requisição = ".$request->getVerbsRequest();






