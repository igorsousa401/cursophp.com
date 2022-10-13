<?php
define("NOME", "Igor Gabriel");
define("IDADE", 20);
define("ALTURA", 1.76);
define("CASADO", true);

define("TIMES", ['Flamengo', 'Vasco', 'Fluminense', 'Vasco']);

echo 'Meu nome é ' .NOME. ', minha idade é ' .IDADE. ', minha Altura é ' .ALTURA. '.';
echo "<hr>";

echo TIMES[0];
echo "<br><br>";
echo var_dump(TIMES);
echo "<hr>";

function exibeNome() {
    echo NOME;
}
exibeNome();
