<?php

$number = 10;

if($number == 10):
    echo "O número é igual a 10!";
elseif($number <= 9):
    echo "O número é menor que 9!";
else:
    echo "O número é diferente!";
endif;

echo "<hr>";

$media = 7;
$media_aprovacao = ($media >= 7) ? "Aprovado" : "Reprovado";

echo $media_aprovacao;