<?php

class Request 
{

    public function __construct() 
    {
        $this->server = $_SERVER;
        $this->InstAtributos();
    }

    public function requestToArray ()
    {
        $array = isset($_GET) ? $_GET : $array = isset($_POST) ? $_POST : [];

        return $array;
    }

    public function InstAtributos()
    {
        $atributoValue = $this->requestToArray();

        foreach ($atributoValue as $key => $value) {
            $this->$key = $value;
        }
    }

    public function getVerbsRequest()
    {
        $verbo = $_SERVER['REQUEST_METHOD'];

        return $verbo;
    }


}

// $request = new Request ();

// echo "<pre>";
// var_dump($request->requestToArray());

// echo "Objeto instanciado ".$request->nome_pessoa."<br>";

// echo "verbo da requisição = ".$request->getVerbsRequest();

