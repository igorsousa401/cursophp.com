<?php
// Manipulação de Arquivos
/*
    fopen()
    fclose()
    fwrite()
    !feof()
    fgets()
    filesize
*/

// 
$arquivo = 'teste.txt';
$conteudo = "Testando o inserimento de conteudo\r\n";

$arquivo_aberto = fopen($arquivo, 'r');
// fwrite($arquivo_aberto, $conteudo);

$tamanho_arquivo = filesize($arquivo);

while(!feof($arquivo_aberto)){
    $linha = fgets($arquivo_aberto, $tamanho_arquivo);
    echo $linha."<br>";
}

fclose($arquivo_aberto);

