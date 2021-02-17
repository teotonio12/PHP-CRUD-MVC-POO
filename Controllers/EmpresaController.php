<?php

require "Models/View.php";
require "Models/EmpresaModel.php";

$view = new View();
$empresaModel = new EmpresaModel();

$view->renderView($empresaModel->empresa(),"Resource/View/empresa.pp");
