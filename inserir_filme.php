<?php

require "./repositório/RepositórioPDO.php";
require "./modelos/filme.php";

session_start();

$filmesrepository = New Filmes_rep_PDO();
$filme = new Filme();

$filme->titulo     = $_POST["Titulo"];
$filme->nota       = $_POST["nota"];
$filme->sinopse    = $_POST["sinopse"];
$filme->capa       = $_POST["capa"];

if ($filmesrepository->salvar($filme)) 
    $_SESSION["msg"] = "Filme cadastrado com sucesso!";
    else
    $_SESSION["msg"] = "Erro ao cadastrar filme";
;

header("Location: /");
?>