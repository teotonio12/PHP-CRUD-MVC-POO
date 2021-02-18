<?php

namespace Models;

use Models\BaseModels;

class UserModels extends BaseModels
{
    private $tabela = 'users';
    private $coluna = [
        'nome', 'email', 'contato'
    ];
    
}
