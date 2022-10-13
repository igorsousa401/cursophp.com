<?php
$idade = 25;
$nome = "Igor";

if(($idade == 25) && ($nome == "Igor")):
    echo "É verdadeiro!<br>";
else:
    echo "É falso!<br>";
endif;

if(($idade == 25) || ($nome == "Gabriel")):
    echo "É verdadeiro!<br>";
else:
    echo "É falso!<br>";
endif;

if(($idade == 25) xor ($nome == "Igor")):
    echo "É verdadeiro!<br>";
else:
    echo "É falso!<br>";
endif;

if(!($idade == 26) && ($nome == "Igor")):
    echo "É verdadeiro!<br>";
else:
    echo "É falso!<br>";
endif;

