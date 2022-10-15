<?php
// Sessão
session_start();
// DB connect
require_once 'db_connect.php';

// Adicionando cliente ao Banco de dados
if(isset($_POST['btn-editar'])){

    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    mysqli_set_charset($connect, "utf8");

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Atualizado com Sucesso!";
        header('Location: ../index.php');
    } else{
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: ../index.php');
    }

}