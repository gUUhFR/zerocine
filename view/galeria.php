<?php include "cabecalho.php" ?>

<?php 
session_start();
require "./util/Mensagem.php";

$controller = new FilmesController();
$filmes = $controller->index();
?>

<body>

    <nav class="nav-extended blue darken-1">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="/">Galeria</a></li>
                <li><a href="/cadastrar">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>BOM DIA</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent blue darken-4">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">

            <?php foreach($filmes as $filme) :?>
            <div class="col s12 m6 l3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?= $filme->poster ?>">
                        <button class="btn-fav btn-floating halfway-fab waves-effect waves-light red">
                            <i class="material-icons"><?= ($filme->favorito)?"favorite":"favorite_border" ?></i>
                        </button>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">
                            <i class="material-icons amber-text">star</i><?= $filme->nota ?>
                        </p>
                        <span class="card-title"><?= $filme->titulo ?></span>
                        <p><?= $filme->sinopse ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>

    </div>


    </div>

    <?= Mensagem::mostrar(); ?>
    <script>
        document.querySelectorAll(".btn-fav").forEach(btn => {
            btn.addEventListener("click", (e) => {
                fetch("/favoritar");
                if (btn.querySelector("i").innerHTML === "favorite"){
                (btn.querySelector("i").innerHTML = "favorite_border")
            }else{
                btn.querySelector("i").innerHTML = "favorite"
            }
            });
        });
        
    </script>

</body>

</html>