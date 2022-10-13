<?php
/*
    Funções (filter_input - filter_var)
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_URL

    FILTER_SANITIZE_SPECIAL_CHARS
    FILTER_SANITIZE_INT
    FILTER_SANITIZE_EMAIL
    FILTER_SANITIZE_URL
*/
?>
<?php

if(isset($_POST['enviar_formulario'])) {
    // Array Erros
    $erros = [];

    // SANITIZAÇÃO E VALIDAÇÕES
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($idade, FILTER_VALIDATE_INT)){
        $erros[] = "Valor inserido não é inteiro!";
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erros[] = "Valor inserido não é um EMAIL válido!";
    }

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if(!filter_var($url, FILTER_VALIDATE_URL)){
        $erros[] = "Valor inserido não é uma URL!";
    } 

    if(!empty($erros)) {
        foreach($erros as $erro) {
            echo "<li> $erro </li>";
        }
    } else{
        echo "Parabéns, você enviou dados corretos!!!";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <label>Nome: <input type="text" name="nome"></label><br>
        <label>Idade: <input type="text" name="idade"></label><br>
        <label>URL: <input type="text" name="url"></label><br>
        <label>E-mail: <input type="email" name="email"></label><br>
        <button type="submit" name="enviar_formulario"> Enviar </button>
    </form>
</body>
</html>