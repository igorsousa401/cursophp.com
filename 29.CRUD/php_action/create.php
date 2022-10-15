<?php
// Sessão
session_start();
// DB connect
require_once 'db_connect.php';

// Adicionando cliente ao Banco de dados
if(isset($_POST['btn-cadastrar'])){

    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    mysqli_set_charset($connect, "utf8");

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    if(mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
        header('Location: ../index.php');
    } else{
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../index.php');
    }

}