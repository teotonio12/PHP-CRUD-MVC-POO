<?php

use Env\Conn;

require "Models/View.php";
require "Models/EmpresaModel.php";
require "Env.php";

$view = new View();
$empresaModel = new EmpresaModel();
$conn = new Conn();
$id_empresa = 1;

$view->renderView($empresaModel->empresa($conn,$id_empresa),"Resource/View/empresa.php");
