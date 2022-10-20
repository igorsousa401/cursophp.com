<?php
// Sessão
session_start();
// DB connect
require_once 'db_connect.php';

// Função CLear
function clear($input) {
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}

// Adicionando cliente ao Banco de dados
if(isset($_POST['btn-cadastrar'])){

    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

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