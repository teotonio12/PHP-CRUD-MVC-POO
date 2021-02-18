<?php

namespace Controllers;

use Models\EmpresaModel;

require "Models/EmpresaModel.php";

#recebe os dados para cadastrar
$dados = [
    '100',
    'Cometa',
    '142424543435',
    'cometa@teste'
];

$empresaModels = new EmpresaModel();


echo $empresaModels->$metodo($empresaModels->tabela,$empresaModels->colunas,$dados);