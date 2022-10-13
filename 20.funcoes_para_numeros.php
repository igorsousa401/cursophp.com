<?php
/*
    number_format
    round
    ceil
    floor
    rand
*/

$db = 1234.54;
$preco = number_format($db, 2, ",", ".");
echo "O preço do produto é $preco<br><br>";

echo round(3.4)."<br>";
echo ceil(3.5)."<br>";
echo floor(6.6)."<br>";
echo rand(1, 10)."<br>";
