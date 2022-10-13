<?php

$senha = "testandosenha1234552";

// BASE 64

$nova_senha = base64_encode($senha);

echo "Base 64: $nova_senha <br>";
echo "Senha real: ".base64_decode($nova_senha);

echo "<hr>";

// MD5

echo "MD5: ".md5($senha)."<br>";
echo "SHA1: ".sha1($senha)."<br>";

echo "<hr>";

// SENHA SEGURA

$senha = "testando123455";
$senha_db = '$2y$10$WxGkNGrsI65lVGJK/TIAUeIDDjf2BdVhlLzgMZauP6l9owKyaazGF';

$senha_segura = password_hash($senha, PASSWORD_DEFAULT);

echo $senha_segura."<br>";

if(password_verify($senha, $senha_db)) {
    echo "Senha Válida";
} else{
    echo "Senha Inválida";
}