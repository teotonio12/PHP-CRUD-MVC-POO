<?php

//pega a rota informa, caso não tenha sido set o index.php
$url = (isset($_GET['url'])) ? $_GET['url'] : 'index.php';


$dir = __DIR__."/Controllers/";

/** define todas as rotas 
 *  sendo a $key a url informada
 *  e o $value o caminho do arquivo
 */
$router = [
    'teste/' => 'TesteControllers.php',
    'contato/' => 'ContatoController.php',
    'empresa/' => 'EmpresaController.php'
];

//verifica se o url informada tem uma rota definida se tiver passa a rota se não passa a rota não encontrada
$controller = array_key_exists ( $url ,$router ) ?  $dir.$router[$url] :  "404.php";

//chama a rota
require $controller;

//teste
