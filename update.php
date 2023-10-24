<?php

require("db/connect.php");

$id = $_GET['id'];

if ($_POST) {

    // VOCES DEVEM UTILIZAR ESSA ESTRUTURA ... ESSE IF POST FICA AQUI ONDE ESTA.
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    // QUANDO RODA O POST PRECISA ATUALIZAR A QUERY ... COPIAR A SINTAXE DO insert.php
    
    $query = "UPDATE contatos
    SET nome = '$nome', celular = '$celular' ,email = '$email'
    WHERE id = $id";

    $sql = mysqli_query($conexao, $query) or die("Erro");

    //VOLTA PARA LISTA
    header("LOCATION: select.php");

    //ENCERRA O SCRIPT
    exit();
}

// AQUI VOCES DEVEM FAZER UM SELECT com WHERE id = ID_QUE_RECEBE_VIA_GET 
// COPIAR A IDEIA DO select.php
$query = "SELECT * FROM contatos WHERE id = $id";
$sql = mysqli_query($conexao, $query) or die("Erro");
$dados = mysqli_fetch_assoc($sql);

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
    <h2>Editar - Contato <?php echo $dados['nome'] ?></h2>

    <form method="post" action="update.php?id=<?php echo $dados['id'] ?>" style="width: 660px;">

        <fieldset>
            <legend>Informações do contato:</legend>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $dados['nome']; ?>">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $dados['email']; ?>">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="celular" placeholder="Celular" value="<?php echo $dados['celular']; ?>">
            </div>

            <button type="submit" class="btn btn-info">ATUALIZAR</button>

        </fieldset>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>