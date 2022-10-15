<?php
// Sessão
session_start();
// DB connect
require_once 'db_connect.php';

// Deletando
if(isset($_POST['btn-deletar'])){

    $id = mysqli_escape_string($connect, $_POST['id']);

    mysqli_set_charset($connect, "utf8");

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if(mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Deletado com Sucesso!";
        header('Location: ../index.php');
    } else{
        $_SESSION['mensagem'] = "Erro ao deletar!";
        header('Location: ../index.php');
    }

}