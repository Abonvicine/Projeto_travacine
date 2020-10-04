<?php

$db = New SQLite3("filmes.db");

$titulo     = $db->escapeString($_POST["Titulo"]);
$nota       = $db->escapeString($_POST["nota"]);
$sinopse    = $db->escapeString($_POST["sinopse"]);
$capa       = $db->escapeString($_POST["capa"]);


// comando insere valores na tabela criada usando estrutura de statement.
$sql = "INSERT INTO filmes (titulo, capa, sinopse, nota) 
        VALUES(:titulo, :capa, :sinopse, :nota)";
$stmt = $db->prepare($sql);

$stmt->bindValue(':titulo',$titulo,SQLITE3_TEXT);
$stmt->bindValue(':capa',$capa,SQLITE3_TEXT);
$stmt->bindValue(':nota',$nota,SQLITE3_FLOAT);
$stmt->bindValue(':sinopse',$sinopse,SQLITE3_TEXT);

if ($stmt->execute()) 
    echo "\n filmes inseridos com sucesso \n ";
    else
    echo "\n erro ao inserir dados de filmes". $db->lastErrorMsg()
;

header("Location: galeria.php?msg=Filme+cadastrado+com+sucesso")
?>