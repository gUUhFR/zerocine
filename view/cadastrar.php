<?php include "cabecalho.php" ?>

<body>

    <nav class="nav-extended blue darken-1">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="/">Galeria</a></li>
                <li class="active"><a href="/cadastrar">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>ZEROCINE</h1>
        </div>
    </nav>

    <div class="row">
        <form method="POST" enctype="multipart/form-data">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar Filme</span>

                    <!-- Input titulo-->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" name="titulo" required>
                            <label for="titulo">titulo do Filme</label>
                        </div>
                    </div>

                    <!-- Input sinopse-->
                    <div class="row">
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="sinopse" id="sinopse" class="materialize-textarea"></textarea>
                                <label for="sinopse">sinopse</label>
                            </div>
                        </div>
                    </div>

                    <!-- Input nota-->
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" name="nota" type="number" step=".1" min=0 max=10 class="validate" required>
                            <label for="nota">nota</label>
                        </div>
                    </div>

                    <!-- Input Capa-->
                    <div class="file-field input-field">
                        <div class="btn blue">
                            <span>Capa</span>
                            <input type="file" name="poster_file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text"  name="poster" required>
                        </div>
                    </div>

                    <div class="card-action">
                        <a class="btn waves-effect waves-light grey" href="/">Cancelar</a>
                        <button type="submit" class="waves-effect waves-light blue lighten-2 btn">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>