<?php include "cabecalho.php" ?>

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


    <div class="row">
        <form method="post">
            <div class="col s6 offset-s3">
                <div class="card white ">
                    <div class="card-content">
                        <span class="card-title">Cadastrar filme</span>
                        <p>Insira as informações de cadastro do filme</p>

                        <div class="row">
                            <div class="input-field col s12">
                                <input name="Titulo" id="Título" type="text" class="validate" required>
                                <label for="Título">Título do filme</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s4">
                                <input name="nota" id="nota" type="number" step=".1" min=0 max=10 class="validate" required>
                                <label for="nota">nota</label>
                            </div>
                        </div>

                        <div class="row">

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea name="sinopse" id="textarea1" class="materialize-textarea" required></textarea>
                                    <label for="textarea1">Sinopse</label>
                                </div>
                            </div>

                            <div class="file-field input-field">
                                <div class="btn indigo lighten-3 black-text">
                                    <span>Imagem de Capa</span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                <input name="capa" class="file-path validate" type="text">
                            </div>
                          
                        </div>
                        <div class="card-action">
                            <button type="submit" class="waves-effect indigo darken-4 btn" href="#">Cadastrar</button>
                            <a class=" grey darken-1 btn" href="/">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>