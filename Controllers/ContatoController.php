<?php

require "Models/ContatoModel.php";
require "Models/View.php";

$view = new View();

$contatoModel = new ContatoModel();

$view->renderView( $contatoModel->user(), "Resource/View/contato.php");


