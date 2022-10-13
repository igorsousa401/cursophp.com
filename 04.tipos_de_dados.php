<?php

/**************** Escalares ****************/

//String
$nome = "Olá mundo!!!";
var_dump($nome);

if(is_string($nome)):
    echo "<br><br><br>É uma String!";
else:
    echo "<br><br><br>Não é uma String!";
endif;
echo "<hr><br>";

// INT
$idade = 20;
var_dump($idade);

if(is_int($idade)):
    echo "<br><br>É um Inteiro.";
else:
    echo "<br><br>Não é um Inteiro.";
endif;
echo "<hr><br>";

//Float
$altura = 1.77;
var_dump($altura);

if(is_float($altura)):
    echo "<br><br>É Float";
else:
    echo "<br><br>Não é um Float";
endif;
echo "<hr><br>";

//Boolean
$admin = false;
var_dump($admin);

if(is_bool($admin)):
    echo "<br><br>É Booleano";
else: 
    echo "<br><br>Não é Booleano";
endif;
echo "<hr><br>";


/**************** Compostos ****************/
//Array
$carros = array("Gol","Uno","Camaro", "Prisma", 12, 20.6, true);
var_dump($carros);

if(is_array($carros)):
    echo "<br><br>É um Array.";
else: 
    echo "<br><br>Não é um Array.";
endif;
echo "<hr><br>";

//Object
class Cliente{
    public $nome;
    public function atribuirNome($nome) {
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Igor");
var_dump($cliente);

if(is_object($cliente)):
    echo "<br><br>É um Objeto.";
else: 
    echo "<br><br>Não é um Objeto.";
endif;
echo "<hr><br>";

/**************** Especiais ****************/

//Null
$cidade = NULL;
var_dump($cidade);

//Resource
