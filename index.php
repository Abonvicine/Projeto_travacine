<?php

$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];

switch($rota){
    case "/":
        require "galeria.php";
        break;
    case "/novo":
        if ($metodo == "GET") require "cadastro.php";
        if ($metodo == "POST") require "inserir_filme.php";
        break;
    default: 
        require "404.php";
        break;
}

?>
