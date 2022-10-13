<?php

$cor = "preta";

switch($cor):
    case "vermelho":
        echo "A cor é vermelha!";
        break;
    case "azul":
        echo "A cor é azul";
        break;
    case "verde":
        echo "A cor é verde";
        break;
    default:
        echo "Não é nenhuma das cores colocadas como casos.";
endswitch;