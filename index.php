<?php

$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];

require "./controller/filmescontroller.php";

switch($rota){
    case "/":
        require "view/galeria.php";
        break;
    case "/novo":
        if ($metodo == "GET") require "view/cadastro.php";
        if ($metodo == "POST"){
            $controller = new FilmeController();
            $controller->save($_REQUEST);
        };
        break;
    default: 
        require "view/404.php";
        break;
}

?>
