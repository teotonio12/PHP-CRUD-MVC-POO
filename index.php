<?php


require "App/Request.php";

//pega a rota informa, caso não tenha sido set o index.php
$url = (isset($_GET['url'])) ? $_GET['url'] : 'index.php';

$uri = explode('/', $url); 

$controller = $uri[0];

/** define todas as rotas 
 *  sendo a $key a url informada
 *  e o $value o caminho do arquivo
 */
$router = [
    'empresa-create' =>   'Controllers\EmpresaControllers@create',
    'empresa-delete' =>   'Controllers\EmpresaControllers@delete',
    'empresa-update' =>   'Controllers\EmpresaControllers@update',
    'empresa-listall' =>  'Controllers\EmpresaControllers@listAll',
    'empresa-listshow' => 'Controllers\EmpresaControllers@listShow',
    'user-create' =>      'Controllers\UserControllers@create',
    'user-delete' =>      'Controllers\UserControllers@delete',
    'user-update' =>      'Controllers\UserControllers@update',
    'user-listall' =>     'Controllers\UserControllers@listAll',
    'user-listshow' =>    'Controllers\UserControllers@listShow'
];


global $rota;

//verifica se o url informada tem uma rota definida se tiver passa a rota se não passa a rota não encontrada
$rota = array_key_exists ( $controller ,$router ) ?  $router[$controller] :  "404.php";

//chama a rota
require "bootstrap/app.php";
