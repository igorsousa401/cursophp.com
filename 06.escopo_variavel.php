<?php
$nome = "Igor Gabriel";
$a = 1;
$b = 2;
$c = 3;

function dizerNome() {
    global $nome;
    echo $nome;
}
dizerNome();

echo "<hr>";
function soma() {
    $soma = $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    echo "O resultado é = $soma";
}
soma();