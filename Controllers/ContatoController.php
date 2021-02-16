<?php

require "Models/ContatoModel.php";

$contatoModel = new ContatoModel();

global $testeModelo;
$testeModelo = $contatoModel;

// public function RenderView ([ 'variavel' => 'valor, objeto, array' ], 'namespace_view')

require "Resource/View/TesteView.php";

