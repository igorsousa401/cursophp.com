<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "sistemalogin";

$connect = mysqli_connect($server_name, $user_name, $password, $db_name);

if(mysqli_connect_error()){
    echo "Falha na conexão com o banco de dados:".mysqli_connect_error();
}