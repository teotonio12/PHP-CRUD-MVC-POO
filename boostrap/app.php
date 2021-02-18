<?php
global $metodo;

$uri = explode('@',$rota);

$file = $uri[0];
$metodo = $uri[1];


require "Controllers/".$file.".php";