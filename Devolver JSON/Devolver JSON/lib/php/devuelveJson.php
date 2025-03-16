<?php

require_once __DIR__ . "/devuelveResultadoNoJson.php";

function devuelveJson($juego)
{

 $json = json_encode($juego);

 if ($json === false) {

  devuelveResultadoNoJson();
 } else {

  http_response_code(200);
  header("Content-Type: application/json");
  echo $json;
 }
}
