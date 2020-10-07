<?php

session_start();

require "./repositório/RepositórioPDO.php";
require "./modelos/filme.php";


class FilmeController{
    public function index(){
        $Repositorio_filmes = New Filmes_rep_PDO();
        return $Repositorio_filmes->listartodos();
    }


    public function save($request){


        $filmesrepository = New Filmes_rep_PDO();
        $filme = new Filme();
        
        $filme->titulo     = $request["Titulo"];
        $filme->nota       = $request["nota"];
        $filme->sinopse    = $request["sinopse"];
        $filme->capa       = $request["capa"];
        
        if ($filmesrepository->salvar($filme)){
            $_SESSION["msg"] = "Filme cadastrado com sucesso!";
        }else{
            $_SESSION["msg"] = "Erro ao cadastrar filme";
        } 

        header("Location: /");

    }

}


?>