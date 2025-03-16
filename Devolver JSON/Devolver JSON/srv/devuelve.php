<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";

$juego = [
    "titulo" => "The Legend of Zelda: Breath of the Wild",
    "genero" => "Aventura de acción",
    "plataforma" => "Nintendo Switch"
];

devuelveJson($juego);

?>