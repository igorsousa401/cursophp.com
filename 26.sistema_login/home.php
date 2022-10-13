<?php

// Conexão
require_once "db_connect.php";

// Iniciando a sessão
session_start();

// Dados Usuário

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);


// Redirecionamento
if(!isset($_SESSION['logado'])){
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página restrita</title>
</head>
<body>
    <h1> Olá <?php echo $dados['nome']?></h1><br><br>
    <a href="logout.php"> SAIR </a>
</body>
</html>