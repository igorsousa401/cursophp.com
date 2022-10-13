<?php

function exibirNome($nome) {
    echo "Meu nome é $nome. <br>";
}
exibirNome("Igor");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    
    if($media >= 7) {
        echo "O aluno $nome foi aprovado com a média $media.<br>";
    } else{
        echo "O aluno $nome foi reprovado!<br>";
    }
}

calcularMedia("Igor", 10, 8, 8, 9);
