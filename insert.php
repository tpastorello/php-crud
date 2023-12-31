<?php

require("db/connect.php");

if ($_POST) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    $query = "INSERT INTO contatos (nome, celular, email) VALUES ('$nome','$celular','$email')";
    $sql = mysqli_query($conexao, $query) or die("Erro");

    header("LOCATION: select.php");
    exit();
}

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
    <h2>Inserir - Novo Contato</h2>

    <form method="post" action="insert.php" style="width: 660px;">

        <fieldset>
            <legend>Informações do contato:</legend>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="nome" placeholder="Nome">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="celular" placeholder="Celular">
            </div>

            <button type="submit" class="btn btn-warning">ENVIAR</button>

        </fieldset>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>