<?php

class CreateSql
{
    
    protected function sqlCreate( string $tabela, array $colunas){
        return "sqlCreate";
    }

    protected function sqlUpdate( string $tabela, array $colunas){
        return "sqlUpdate";
    }

    protected function sqlDelete( string $tabela, array $colunas){
        return "sqlDelete";
    }

    protected function sqlListAll( string $tabela, array $colunas){
        return "sqlListAll";
    }

    protected function sqlListShow( string $tabela, array $colunas){
        return "sqlListShow";
    }
}
