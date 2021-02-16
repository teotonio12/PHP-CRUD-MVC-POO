<?php

//pega a rota informa, caso não tenha sido set o index.php
$url = (isset($_GET['url'])) ? $_GET['url'] : 'index.php';

/** define todas as rotas 
 *  sendo a $key a url informada
 *  e o $value o caminho do arquivo
 */

$router = array(
    'teste/' => 'Controllers/TesteControllers.php',
    'contato/' => 'Controllers/ContatoController.php',
    'Models/Teste/' => 'Models/teste.php',
    'TesteView/' => 'Resource/View/TesteView.php'
);

//passa por todas as rotas
foreach ($router as $key => $value) {
    
    //verifica se a rota existe se sim finaliza a busca
    if ($key == $url) {
        require $router[$url];
        die;
    }

}

//se não encontrar a rota permanece no index.php
echo "index.php";