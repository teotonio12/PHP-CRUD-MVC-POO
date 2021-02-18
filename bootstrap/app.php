<?php

$uri = explode('@',$rota);

$file = "Controllers/".$uri[0].".php";
$class = $uri[0];
$metodo = $uri[1];


require $file;


$requestEmpresa = [
    '100',
    'Cometa',
    '13218434354',
    'cometa@teste.com'

];

$requestUser = [
    '100',
    'Renan',
    'descricao',
    'renan@teste.com'

];

$request = [];

$objClass = new $class();

$objClass->$metodo($request);


