<?php
// Conhexão com banco de dados
$server_name = "localhost";
$usuario = "root";
$senha = "";
$db_name = "crud";

$connect = mysqli_connect($server_name, $usuario, $senha, $db_name);

if(mysqli_connect_error()) {
    echo "Erro ao conectar ao banco de dados!";
}