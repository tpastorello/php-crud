<?php
header("Content-Type: application/json; charset=UTF-8");
require("../db/connect.php");

if (isset($_GET['term'])) {
    $searchTerm = $_GET['term'];
    $searchTerm = mysqli_real_escape_string($conexao, $searchTerm);
    $query = "SELECT * FROM contatos WHERE nome LIKE '%$searchTerm%' OR email LIKE '%$searchTerm%' ORDER BY id DESC";
} else {
    $query = "SELECT * FROM contatos ORDER BY id DESC";
}

$sql = mysqli_query($conexao, $query) or die("Erro");


$dados = mysqli_fetch_all($sql);
// var_dump(($dados));
echo json_encode($dados);
?>
