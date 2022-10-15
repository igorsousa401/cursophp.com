<?php 
    include_once 'includes/header.php';
?>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light"> Adicionar Clientes </h3>

            <form action="php_action/create.php" method="POST">
                <div class="input-field col s12 ">
                    <input type="text" name="nome" id="nome">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s12 ">
                    <input type="text" name="sobrenome" id="sobrenome">
                    <label for="sobrenome">Sobrenome</label>
                </div>
                <div class="input-field col s12 ">
                    <input type="text" name="email" id="email">
                    <label for="email">E-mail</label>
                </div>
                <div class="input-field col s12 ">
                    <input type="text" name="idade" id="idade">
                    <label for="idade">Idade</label>
                </div>

                <button type="submit" class="btn blue" name="btn-cadastrar"> Cadastrar </button>
                <a class="btn green" href="index.php"> Listar Clientes </a>
            </form>
        
        </div>
    </div>

<?php 
    include_once 'includes/footer.php';
?>