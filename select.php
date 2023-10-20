<?php

require("db/connect.php");

$query = "SELECT * FROM contatos ORDER BY id DESC";
$sql = mysqli_query($conexao, $query) or die("Erro");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h2>Contatos</h2>

    <table class="table" style="width: 660px">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">CELULAR</th>
                <th>
                    <a href="insert.php">INSERIR</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($dados = mysqli_fetch_assoc($sql)) {
            ?>
                <tr>
                    <td><?php echo $dados['id']  ?></td>
                    <td><?php echo $dados['nome']  ?></td>
                    <td><?php echo $dados['celular']  ?></td>
                    <td><?php echo $dados['email']  ?></td>
                    <td>
                        <a href="#">Editar</a>
                        <a href="#">Excluir</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>