<?php

$host = "localhost";
$user = "root";
$pass = "root";

try {
    $conexao = mysqli_connect($host, $user, $pass);    
}  catch (Exception $e) {
    echo 'Erro: ',  $e->getMessage(), "\n";
}
