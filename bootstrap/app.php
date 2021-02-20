<?php

$uri = explode('@',$rota);

$file = $uri[0].".php";
//usar expressão regular de traz para frente de @ até barra

$pastaClass = $uri[0];
$metodo = $uri[1];


$pastaClass = explode("\\", $pastaClass);

$pasta = $pastaClass[0];
$class = $pastaClass[1];


require $file;


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

$objClass = new $class();

$objClass->$metodo();


