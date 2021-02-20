<?php


require "../App/Request.php";

$request = new Request ();

$rotasUri = $request->getUri();

$rotaUri = $rotasUri[0];


/** define todas as rotas 
 *  sendo a $key a url informada
 *  e o $value o caminho do arquivo
 */
$router = [
    '/empresa-create' =>   '../Controllers\EmpresaControllers@create',
    '/empresa-delete' =>   '../Controllers\EmpresaControllers@delete',
    '/empresa-update' =>   '../Controllers\EmpresaControllers@update',
    '/empresa-listall' =>  '../Controllers\EmpresaControllers@listAll',
    '/empresa-listshow' => '../Controllers\EmpresaControllers@listShow',
    '/user-create' =>      '../Controllers\UserControllers@create',
    '/user-delete' =>      '../Controllers\UserControllers@delete',
    '/user-update' =>      '../Controllers\UserControllers@update',
    '/user-listall' =>     '../Controllers\UserControllers@listAll',
    '/user-listshow' =>    '../Controllers\UserControllers@listShow'
];

//empresa-create = 

global $rota;

//verifica se o url informada tem uma rota definida se tiver passa a rota se não passa a rota não encontrada
$rota = array_key_exists ( $rotaUri ,$router ) ?  $router[$rotaUri] :  "404.php";

//chama a rota
require "../bootstrap/app.php";
