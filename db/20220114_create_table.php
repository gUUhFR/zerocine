<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) 
    echo "\ntabela apagada\n";

$sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR (200),
        sinopse TEXT,
        nota DECIMAL(3,1)
    )
";

if ($bd->exec($sql)) 
    echo "\ntabela filmes criada\n"; 
else
    echo "\nerro ao criar tabela filmes\n";
    
    
$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        0,
        'Venom 2: Tempo de Carnificina',
        'https://www.themoviedb.org/t/p/w300/h5UzYZquMwO9FVn15R2eK2itmHu.jpg',
        'Em busca de seu próximo furo de reportagem, o jornalista Eddie Brock consegue uma entrevista exclusiva com Cletus Kasady, um assassino no corredor da morte, que descobre o segredo de Eddie e se torna o hospedeiro de Carnificina, um simbionte aterrorizante e ameaçador. Eddie e Venom precisam superar sua relação atribulada e trabalhar em conjunto para derrotar Carnificina.',
        6.7
    )";

if ($bd->exec($sql)) 
    echo "\nfilmes inseridos com sucesso\n"; 
else
    echo "\nerro ao inserir filmes\n";

    $sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        1,
        'Eternos',
        'https://www.themoviedb.org/t/p/w300/vvDk3CLqeBrYfxVJwYEn9lWOYGI.jpg',
        'Após os eventos de Vingadores: Ultimato, os Eternos, uma raça alienígena imortal criada pelos Celestiais que vivem em segredo na Terra há mais de 7000 anos, se reúnem após uma tragédia inesperada para proteger a humanidade de seus colegas malignos: os Deviantes.',
        6.4
    )";

if ($bd->exec($sql)) 
echo "\nfilmes inseridos com sucesso\n"; 
else
echo "\nerro ao inserir filmes\n";

?>