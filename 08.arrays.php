<?php
// Arrays Numéricos
$carros = array("Bmw", "Veloster", "Hilux", "Camaro", "Prisma");
print_r($carros);
echo "$carros[1]";
echo "<hr>";

$motos = array();
$motos[] = "Honda";
$motos[] = "Suzuki";
$motos[] = "Yamaha";
print_r($motos);
echo "<br>";

$clientes = ["Igor", "Anna", "Rodrigo", "Flávia"];
print_r($clientes);
echo "<hr>";

// Count
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

// Foreach
foreach($carros as $valor) {
    echo $valor."<br>";
}
echo "<hr>";

// Arrays Associativos
$pessoa = array("nome" => "Igor Gabriel", "idade" => 20, "altura" => 1.73, "peso" => 90);
$pessoa["cidade"] = "Itabuna";
print_r($pessoa);
echo "<hr>";

foreach($pessoa as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";

// Arrays Multidimensionais
$times = array(
    "cariocas" => array(1 => "Flamengo", 2 => "Vasco", 3 => "Botafogo", 4 => "Fluminense"),
    "paulistas" => array(1 => "São Paulo", 2 => "Corinthias", 3 => "Santos", 4 => "Bragantino"),
    "piauienses" => array(1 => "River", 2 => "Parnaíba", 3 => "Altos")
);
echo $times["cariocas"][0];
echo $times["cariocas"][1];
echo $times["cariocas"][2];
echo $times["cariocas"][3];
echo "<hr>";

echo "CLASSIFICAÇÃO CARIOCA:"."<br>";
foreach($times["cariocas"] as $indice => $valor){
    echo $indice." - ".$valor."<br>";
}
echo "<br>";

echo "CLASSIFICAÇÃO PAULISTA:"."<br>";
foreach($times["paulistas"] as $indice => $valor){
    echo $indice." - ".$valor."<br>";
}
echo "<br>";

echo "CLASSIFICAÇÃO PIAUIENSE:"."<br>";
foreach($times["piauienses"] as $indice => $valor){
    echo $indice." - ".$valor."<br>";
}