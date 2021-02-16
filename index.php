<?php

//pega a rota informa, caso não tenha sido set o index.php
$url = (isset($_GET['url'])) ? $_GET['url'] : 'index.php';

/** define todas as rotas 
 *  sendo a $key a url informada
 *  e o $value o caminho do arquivo
 */
$router = [
    'teste/' => 'Controllers/TesteControllers.php',
    'contato/' => 'Controllers/ContatoController.php',
    'models/teste/' => 'Models/Teste.php'
];

//verifica se o url informada tem uma rota definida se tiver chama a rota se não chama rota não encontrada
array_key_exists ( $url ,$router ) ? require $router[$url] : require "404.php";
