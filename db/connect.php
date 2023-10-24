<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "tuto_01";

try {
    //CONECTA
    $conexao = mysqli_connect($host, $user, $pass); 

    //SELECIONA O BANCO DE DADOS 
    $banco = mysqli_select_db($conexao, $db);

    //mysqli_set_charset($conexao,'utf8');

}  catch (Exception $e) {
    echo 'Erro: ',  $e->getMessage(), "\n";
}
