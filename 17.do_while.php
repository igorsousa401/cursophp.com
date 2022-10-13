<?php

$contador = 1;
while($contador <= 10) {
    echo "O contador é $contador. <br>";
    $contador++;
}
echo "<hr>";

$contador = 1;

do {
    echo "O contador é $contador. <br>";
    $contador++;
} while($contador <= 10);