<?php

require "conexao.php";

class Filmes_rep_PDO{

    private $conexao;
    
    public function __construct(){
        $this->conexao = conexao::criar_conexao();
    }

    public function listartodos():array{

        $lista = array();
        // obtem dados da tabela no banco de dados
        $sql = "SELECT * FROM filmes";
        $filmes = $this->conexao->query($sql);

        while ($filme = $filmes->fetchObject()){
            array_push($lista,$filme);
             
        }

        return $lista;

    }

    public function salvar(filme $filme):bool{
        
        $sql = "INSERT INTO filmes (titulo, capa, sinopse, nota) 
        VALUES(:titulo, :capa, :sinopse, :nota)";
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(':titulo',$filme->titulo,PDO::PARAM_STR);
        $stmt->bindValue(':capa',$filme->capa,PDO::PARAM_STR);
        $stmt->bindValue(':nota',$filme->nota,PDO::PARAM_STR);
        $stmt->bindValue(':sinopse',$filme->sinopse,PDO::PARAM_STR);
        
        return $stmt->execute();
    }

}