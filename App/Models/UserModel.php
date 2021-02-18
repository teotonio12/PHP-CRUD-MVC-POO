<?php

require "App/Models/BaseModels.php";

class UserModel extends BaseModels
{
    
    public $tabela = 'users';
    public $colunas = [
        'id_user','nome','description','email'
    ];

}   