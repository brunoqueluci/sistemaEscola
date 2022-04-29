<?php

function conecta()
{  
    $host = 'localhost';
    $user = 'root';
    $pass = "";
    $dbname = "escola";

    $conexao = mysqli_connect($host, $user, $pass, $dbname);
    return $conexao;
}