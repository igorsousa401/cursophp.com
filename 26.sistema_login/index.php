<?php
    // Conexão
    require_once "db_connect.php";

    // Sessões
    session_start();


    // Botão Entrar
    if(isset($_POST['btn_enviar'])) {
        $erros = [];

        $login = mysqli_escape_string($connect, $_POST['user']);
        $senha = mysqli_escape_string($connect, $_POST['password']);

        if(empty($login) or empty($senha)) {
            $erros[] = "<li> Os campos login/senha não podem estar vazios! </li><br>";
        } else{
            $sql = "SELECT login FROM usuarios WHERE login = '$login'";

            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) > 0){
                $senha = md5($senha);
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha ='$senha'";
                $resultado =  mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) == 1) {

                    $dados = mysqli_fetch_array($resultado);
                    $_SESSION['logado'];
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: home.php');
                    mysqli_close($connect);

                } else {
                    $erros[] = "<li> Usuário e senha não conferem! <li>";
                }

            } else{
                $erros[] = "<li> Usuário inexistente! </li>";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <?php
            if(!empty($erros)){
                foreach($erros as $erro){
                    echo $erro;
                }
            }
        ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <label >Name<input class="input-form" type="text" id="nome" name="user" required></label>
                    <label>Password<input class="input-form" type="password" id="password" name="password" required></label>
                    <div class="btn">
                        <input class="btn-form" type="submit" name="btn_enviar" value="Entrar">
                    </div>
                </form>
</body>
</html>