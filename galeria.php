<?php include "cabecalho.php" ?>

<?php

$db = new SQLite3("filmes.db");

// obtem dados da tabela no banco de dados
$sql = "SELECT * FROM filmes";
$filmes = $db->query($sql);

/*
$filme1 = [
    "título"=>"Harry Potter e o Cálice de Fogo",
    "nota" =>9.0, 
    "sinopse" => "Em seu 4º ano na Escola de Magia e Bruxaria de Hogwarts, Harry Potter é misteriosamente selecionado para participar do Torneio Tribruxo, uma competição internacional em que precisará enfrentar alunos mais velhos e experientes de Hogwarts e também de outras escolas de magia. Além disso a aparição da marca negra de Voldemort ao término da Copa do Mundo de Quadribol põe a comunidade de bruxos em pânico, já que sinaliza que o temido bruxo está prestes a retornar.",
    "capa" => "https://image.tmdb.org/t/p/w300/5oWB3hjzyECRBAjgWkmZinxl9qA.jpg"];
$filme2 = [
    "título"=>"Enola Holmes",
    "nota" =>9.8, 
    "sinopse" => "Quando a jovem Enola Holmes descobre que sua mãe desapareceu, ela decide usar toda a sua astúcia para encontrá-la. Superando seu famoso irmão Sherlock Holmes, ela desvenda uma perigosa conspiração e prova que solucionar mistérios é mesmo um negócio de família.",
    "capa" => "https://image.tmdb.org/t/p/w300/riYInlsq2kf1AWoGm80JQW5dLKp.jpg"
    ];
$filme3 = [
    "título"=>"SCOOBY! O Filme",
    "nota" =>7.4, 
    "sinopse" => "Scooby e a gangue enfrentam seu mistério mais desafiador de todos os tempos: um plano para libertar o cão fantasma Cerberus no mundo. Enquanto eles correm para parar esse caopocalypse, a gangue descobre que Scooby tem um destino épico maior do que se imaginava.",
    "capa" => "https://image.tmdb.org/t/p/w300/p7RjlzDLV4KksrWtyve1Rg40nLv.jpg"
    ];
$filme4 = [
    "título"=>"Aves de Rapina: Arlequina e sua Emancipação Fantabulosa",
    "nota" =>7.2, 
    "sinopse" => "Quando a jovem Enola Holmes descobre que sua mãe desapareceu, ela decide usar toda a sua astúcia para encontrá-la. Superando seu famoso irmão Sherlock Holmes, ela desvenda uma perigosa conspiração e prova que solucionar mistérios é mesmo um negócio de família.",
    "capa" => "https://image.tmdb.org/t/p/w300/A50Ngq9lh9aCTGHC6kttrppHNoF.jpg"
    ];
$filmes = [$filme1,$filme2,$filme3,$filme4]
*/
?>

<body>

    <nav class="nav-extended light-blue darken-3">

        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastro.php">Cadastrar</a></li>
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

            <?php while ($filme = $filmes->fetchArray()) : ?>
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image">
                            <img src=<?= $filme["capa"] ?>>

                            <a class="btn-floating halfway-fab waves-effect waves-light red">
                                <i class="material-icons">favorite_border</i></a>
                        </div>

                        <div class="card-content hoverable">
                            <span class="card-title"><?= $filme["titulo"] ?></span>
                            <p class="valign-wrapper">
                                <i class="material-icons amber-text darken-4">star</i>
                                </a><?= $filme["nota"] ?></p>
                            <p><?= $filme["sinopse"] ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>

        </div>
    </div>

</body>
<?php if(isset($_GET["msg"])) : ?>
    <script>
        M.toast({
            html: "<?= $_GET["msg"] ?>"
        });
    </script> 
<?php endif ?>

</html>