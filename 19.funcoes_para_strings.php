<?php

// Funções para Strings
/*
    stroupper x
    strolower x
    substr x
    str_pad x
    str_repeat x
    strlen x
    str_replace x
*/

$nome = "igor gabriel";
echo strtoupper($nome)."<br>";

$nome = "IGOR GABRIEL";
echo strtolower($nome)."<br>";

echo "<hr>";

$mensagem = "Olá mundo!";
echo substr($mensagem, 5, 5);

echo "<hr>";

$obj = "mouse";
$novoObj = str_pad($obj, 22, "*", STR_PAD_BOTH);
echo $novoObj;

echo "<hr>";

echo str_repeat("Olá mundo!!! ", 3);

echo "<hr>";

$palavra = "Teste";
echo strlen($palavra);

echo "<hr>";

$mensagem_teste = "A seleção Argentina será campeã da copa do mundo de 2022.";

echo str_replace("Argentina", "Brasileira", $mensagem_teste);

echo "<hr>";

echo strpos($mensagem_teste , "mundo");
