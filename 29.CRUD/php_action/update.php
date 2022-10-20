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
if(isset($_POST['btn-editar'])){

    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);
    $id = clear($_POST['id']);

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