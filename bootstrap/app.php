<?php

        //$rota == '404.php' ? require "../404.php" : '';

        if ($rota == '404.php') {
            require "../404.php";
            die;
        }

        $uri = explode('@',$rota);

        $file = $uri[0].".php";

        $pastaClass = $uri[0];
        $metodo = $uri[1];


        $pastaClass = explode("\\", $pastaClass);

        $pasta = $pastaClass[0];
        $class = $pastaClass[1];


        


require $file;

        $objClass = new $class();   

        $objClass->$metodo();

// $requestEmpresa = [
//     '100',
//     'Cometa',
//     '13218434354',
//     'cometa@teste.com'

// ];

// $requestUser = [
//     '100',
//     'Renan',
//     'descricao',
//     'renan@teste.com'

// ];

//$request = new Request();




