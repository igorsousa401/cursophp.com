<?php

    
    if(isset($_POST['enviar_formulario'])){
        $tamanhoArray = count($_FILES['arquivo']['name']);
        $contador = 0;
        
            $formatos = ["png", "jpeg", "gif", "jpg"];
            while($contador < $tamanhoArray){
                $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

                if(in_array($extensao, $formatos)){
                    $pasta = "arquivos/";
                    $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                    $novoNome = uniqid().".$extensao";
                    
                    if(move_uploaded_file($temporario, $pasta.$novoNome)){
                        echo "UPLOAD feito com sucesso para $pasta$novoNome!<br>";
                    } else{
                        echo "Não foi possível fazer upload do arquivo $temporario!!!<br>";
                    }
                } else{
                    echo "Formato $extensao não é Permitido!<br>";
                }
                $contador++;
            }
      
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple><br><br>
        <button type="submit" name="enviar_formulario"> ENVIAR ARQUIVO </button>
    </form>
</body>
</html>