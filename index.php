<?php

//pega a rota informa, caso não tenha sido set o index.php
$url = (isset($_GET['url'])) ? $_GET['url'] : 'index.php';

$uri = explode('/', $url); 

$controller = $uri[0];

$dir = __DIR__."/Controllers/";

/** define todas as rotas 
 *  sendo a $key a url informada
 *  e o $value o caminho do arquivo
 */
$router = [
    'empresa-create' =>   'EmpresaControllers@create',
    'empresa-delete' =>   'EmpresaControllers@delete',
    'empresa-update' =>   'EmpresaControllers@update',
    'empresa-listall' =>  'EmpresaControllers@listAll',
    'empresa-listshow' => 'EmpresaControllers@listShow',
    'user-create' =>      'UserControllers@create',
    'user-delete' =>      'UserControllers@delete',
    'user-update' =>      'UserControllers@update',
    'user-listall' =>     'UserControllers@listAll',
    'user-listshow' =>    'UserControllers@listShow'
];


global $rota;

//verifica se o url informada tem uma rota definida se tiver passa a rota se não passa a rota não encontrada
$rota = array_key_exists ( $controller ,$router ) ?  $router[$controller] :  "404.php";

//chama a rota
require "bootstrap/app.php";
