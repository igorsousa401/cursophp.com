<?php
/*
array_change_key_case — Altera o caso de todas as chaves em um array
array_chunk — Dividir um array em pedaços
array_column — Retorna os valores de uma única coluna na matriz de entrada
array_combine — Cria um array usando um array para chaves e outro para seus valores
array_count_values ​​— Conta todos os valores de um array
array_diff_assoc — Calcula a diferença de arrays com verificação de índice adicional
array_diff_key — Calcula a diferença de arrays usando chaves para comparação
array_diff_uassoc — Calcula a diferença de arrays com verificação de índice adicional que é executada por uma função de retorno de chamada fornecida pelo usuário
array_diff_ukey — Calcula a diferença de arrays usando uma função de retorno de chamada nas teclas para comparação
array_diff — Calcula a diferença de arrays
array_fill_keys — Preencha um array com valores, especificando chaves
array_fill — Preencha um array com valores
array_filter — Filtra elementos de um array usando uma função de retorno de chamada
array_flip — Troca todas as chaves com seus valores associados em uma matriz
array_intersect_assoc — Calcula a interseção de arrays com verificação de índice adicional
array_intersect_key — Calcula a interseção de arrays usando chaves para comparação
array_intersect_uassoc — Calcula a interseção de arrays com verificação de índice adicional, compara índices por uma função de retorno de chamada
array_intersect_ukey — Calcula a interseção de arrays usando uma função de retorno de chamada nas teclas para comparação
array_intersect — Calcula a interseção de arrays
array_is_list — Verifica se um determinado array é uma lista
array_key_exists — Verifica se a chave ou índice fornecido existe no array
array_key_first — Obtém a primeira chave de um array
array_key_last — Obtém a última chave de um array
array_keys — Retorna todas as chaves ou um subconjunto das chaves de um array
array_map — Aplica o retorno de chamada aos elementos dos arrays fornecidos
array_merge_recursive — Mesclar um ou mais arrays recursivamente
array_merge — Mesclar um ou mais arrays
array_multisort — Classifica arrays múltiplos ou multidimensionais
array_pad — Preencher a matriz para o comprimento especificado com um valor
array_pop — Retire o elemento do final do array
array_product — Calcula o produto de valores em uma matriz
array_push — Empurre um ou mais elementos para o final do array
array_rand — Escolha uma ou mais chaves aleatórias de um array
array_reduce — Reduza iterativamente a matriz para um único valor usando uma função de retorno de chamada
array_replace_recursive — Substitui elementos de arrays passados ​​no primeiro array recursivamente
array_replace — Substitui elementos de arrays passados ​​no primeiro array
array_reverse — Retorna um array com elementos na ordem inversa
array_search — Pesquisa a matriz por um determinado valor e retorna a primeira chave correspondente se for bem-sucedida
array_shift — Desloca um elemento do início do array
array_slice — Extrai uma fatia do array
array_splice — Remova uma parte do array e substitua-o por outra coisa
array_sum — Calcula a soma dos valores em um array
array_udiff_assoc — Calcula a diferença de arrays com verificação de índice adicional, compara dados por uma função de retorno de chamada
array_udiff_uassoc — Calcula a diferença de arrays com verificação de índice adicional, compara dados e índices por uma função de retorno de chamada
array_udiff — Calcula a diferença de arrays usando uma função de retorno de chamada para comparação de dados
array_uintersect_assoc — Calcula a interseção de arrays com verificação de índice adicional, compara dados por uma função de retorno de chamada
array_uintersect_uassoc — Calcula a interseção de arrays com verificação de índice adicional, compara dados e índices por funções de retorno de chamada separadas
array_uintersect — Calcula a interseção de arrays, compara dados por uma função de retorno de chamada
array_unique — Remove valores duplicados de um array
array_unshift — Anexe um ou mais elementos ao início de um array
array_values ​​— Retorna todos os valores de um array
array_walk_recursive — Aplica uma função de usuário recursivamente a cada membro de um array
array_walk — Aplica uma função fornecida pelo usuário a cada membro de um array
array — Cria um array
arsort — Classifica uma matriz em ordem decrescente e mantém a associação de índice
asort — Classifica uma matriz em ordem crescente e mantém a associação de índice
compact — Cria um array contendo variáveis ​​e seus valores
count — Conta todos os elementos em uma matriz ou em um objeto Countable
current — Retorna o elemento atual em um array
cada — Retorna o par atual de chave e valor de um array e avança o cursor do array
end — Configura o ponteiro interno de um array para seu último elemento
extract — Importa variáveis ​​para a tabela de símbolos atual de um array
in_array — Verifica se existe um valor em um array
key_exists — Alias ​​de array_key_exists
key — Busca uma chave de um array
krsort — Classifica um array por chave em ordem decrescente
ksort — Classifica um array por chave em ordem crescente
list — Atribui variáveis ​​como se fossem um array
natcasesort — Classifica uma matriz usando um algoritmo de "ordem natural" que não diferencia maiúsculas de minúsculas
natsort — Classifica uma matriz usando um algoritmo de "ordem natural"
next — Avança o ponteiro interno de um array
pos — Alias ​​do atual
prev — Rebobina o ponteiro do array interno
range — Cria um array contendo um intervalo de elementos
reset — Defina o ponteiro interno de uma matriz para seu primeiro elemento
rsort — Classifica um array em ordem decrescente
shuffle — Embaralha uma matriz
sizeof — Alias ​​de contagem
sort — Classifica um array em ordem crescente
uasort — Classifica um array com uma função de comparação definida pelo usuário e mantém a associação de índice
uksort — Classifica um array por chaves usando uma função de comparação definida pelo usuário
usort — Classifica uma matriz por valores usando uma função de comparação definida pelo usuário 
*/

$nomes = array("Eu" => "Igor", "Namorada" => "Anna", "Mãe" => "Iana", "Pai" => "Cristovão", "Irmão" => "Italo");

/*
if(is_array($nomes)):
    echo "É um array!";
else:
    echo "Não é um array!";
endif;
echo "<hr>";
*/

/*
if(in_array("Igor",$nomes)):
    echo "Existe no array!";
else:
    echo "Não existe no array!";
endif;
*/

/*
$keys = array_keys($nomes);
print_r($keys);
*/

/*
$values = array_values($nomes);
print_r($values);
*/

$carros = array("Camaro", "Hilux", "Prisma", "Classic");
/*
$motos = array("Pop100", "Hornet", "Bis");
$veiculos = array_merge($carros, $motos);
print_r($veiculos);
*/

/*
array_pop($carros);
print_r($carros);
*/

/*
array_shift($carros);
print_r($carros);
*/


$frutas = ["maçã", "banana", "mamão"];
/*
//array_unshift($frutas, "melao", "melancia", "kiwi", "morango");
array_push($frutas, "melao", "melancia", "kiwi", "morango");
print_r($frutas);
*/

/*
$keys = ["Campeão", "Vice", "Terceiro"];
$values = ["Flamengo", "Vasco", "Fluminense"];
$times = array_combine($keys, $values);
print_r($times);
*/

/*
$soma = [1, 5, 10, 20, 10.5];
$total = array_sum($soma);
echo $total;
*/

/*
$data = "30/10/2020";
$novaData = explode("/", $data);
print_r($novaData);
*/

/*
$nomes = ["Rodrigo", "Anna", "Igor", "Flávia"];
$todosOsNomes = implode(", ",$nomes);
print_r($todosOsNomes);
*/