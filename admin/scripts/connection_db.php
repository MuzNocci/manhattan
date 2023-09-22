<?php

$URL = "http://$_SERVER[HTTP_HOST]";

if ($URL == 'https://www.nocciolli.com.br' || $URL == 'http://www.nocciolli.com.br' || $URL == 'http://localhost') {

    date_default_timezone_set('America/Sao_Paulo');

    $servername = "185.239.210.52";
    $database = "u667637001_manhattan";
    $username = "u667637001_root";
    $password = "Manhattan@123";

}else{

    echo 'HOST NÃO AUTORIZADO: '.$URL;
    echo '<br /><br />';
    echo '=P';
    die();

}


?>