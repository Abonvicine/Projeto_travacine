<?php include "cabecalho.php" ?>

<?php

session_start();

require "./repositório/RepositórioPDO.php";
require "./util/msg.php";

$Repositorio_filmes = New Filmes_rep_PDO();
$filmes = $Repositorio_filmes->listartodos();

?>

<body>

    <nav class="nav-extended light-blue darken-3">

        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="/">Galeria</a></li>
                <li><a href="/novo">Cadastrar</a></li>
            </ul>
        </div>

        <div class="nav-header center">
            <h1>Travacine</h1>
        </div>

        <div class="nav-content">
            <ul class="tabs tabs-transparent light-blue darken-4">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>

    </nav>

    <div class="container">
        <div class="row">

            <?php foreach ($filmes as $filme) : ?>
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image">
                            <img src=<?= $filme->capa ?>>

                            <a class="btn-floating halfway-fab waves-effect waves-light red">
                                <i class="material-icons">favorite_border</i></a>
                        </div>

                        <div class="card-content hoverable">
                            <span class="card-title"><?= $filme->titulo ?></span>
                            <p class="valign-wrapper">
                                <i class="material-icons amber-text darken-4">star</i>
                                </a><?= $filme->nota ?></p>
                            <p><?= $filme->sinopse ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>
    
    <?= Mensagem::show_msg(); ?>

</body>


</html>