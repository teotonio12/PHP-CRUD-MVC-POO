<?php

namespace Controllers;

use Models\UserModel;
use Controllers\Controllers;

require "Models/UserModel.php";

#recebe os dados para cadastrar
$dados = [
    '100',
    'Renan Teotonio',
    'descricao',
    'teste@teste.com'
];

$userModels = new UserModel();

echo $userModels->$metodo($userModels->tabela,$userModels->colunas,$dados);