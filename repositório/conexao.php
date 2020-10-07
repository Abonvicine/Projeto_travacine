<?php

class conexao{

    public static function criar_conexao():PDO{
    return New PDO("sqlite:database/filmes.db");
    }
}