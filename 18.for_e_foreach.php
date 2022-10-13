<?php

for($contador = 1; $contador <= 10; $contador++) {
    echo "O contador é $contador. <br>";
}

echo "<hr>";

$cores = ["Flamengo", "Vasco", "Botafogo", "Fluminense"];

echo "Classificação do Campeonato Carioca: <br><br>";
foreach($cores as $indices => $values){
    $classificacao = ($indices + 1);
    echo "$classificacao - $values<br>";

}