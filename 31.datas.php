<?php
// Time Zone
date_default_timezone_set('America/Sao_Paulo');

// Datas
$data = date('Y-m-d');
echo $data."<br>";

// Data e Hora
$datatime = date('Y-m-d H:i:s');
echo $datatime."<br>";

echo "<hr>";

// TIme
$time = time();
echo $time."<br>";
echo date('d-m-Y H:i:s', $time);
echo "<hr>";

//MKTIME
$data_pagamento = mktime(15, 30, 00, 02, 15, 2025);
echo date('d/m - H:i', $data_pagamento)."<br>";

//strtotime
$data = '2020-02-14 20:55:30';
$data = strtotime($data);

echo date('d/m/Y H:i:s', $data);
