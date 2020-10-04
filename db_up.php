<?php

// comando exec executa um comando no banco de dados e retorna True ou False.
// comando query execura um comando no banco e retorna os valores de registro.

//cria variável de banco de dados $db.
$db = new SQLite3("filmes.db");

// exclui tabela de dados caso ela já exista
$sql = "DROP TABLE IF EXIST filmes";

// comando exec executa o código SQL contido na variável &sql.nav-extended
// caso bando de dados seja apagado exibe mensagem
if ($db->exec($sql))
    echo "\n Tabela de filmes apagada"
;

// comandos sql para criação da tabela e de seus metadados.
$sql = "CREATE TABLE filmes(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR(200) NOT NULL,
    capa VARCHAR(200),
    sinopse TEXT,
    nota DECIMAL(2,1)
    )
";


if ($db->exec($sql)) 
    echo "\n tabela filmes criada \n ";
    else
    echo "\n erro ao criar tabela filmes \n "
;

// comando insere valores na tabela criada
$sql = "INSERT INTO filmes (id, titulo, capa, sinopse, nota) VALUES
        (0,
        'Harry Potter e o Cálice de Fogo',
        'https://image.tmdb.org/t/p/w300/5oWB3hjzyECRBAjgWkmZinxl9qA.jpg',
        'Em seu 4º ano na Escola de Magia e Bruxaria de Hogwarts, Harry Potter é misteriosamente selecionado para participar do Torneio Tribruxo, uma competição internacional em que precisará enfrentar alunos mais velhos e experientes de Hogwarts e também de outras escolas de magia. Além disso a aparição da marca negra de Voldemort ao término da Copa do Mundo de Quadribol põe a comunidade de bruxos em pânico, já que sinaliza que o temido bruxo está prestes a retornar.',
        9.0
)";

if ($db->exec($sql)) 
    echo "\n filmes inseridos com sucesso \n ";
    else
    echo "\n erro ao inserir dados de filmes \n "
;


