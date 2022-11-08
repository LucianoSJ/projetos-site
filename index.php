<?php
    require_once './config/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div id="container">
        <img src="img/perfil.png" alt="">
        <div>
                <form action="login.php" method="post" autocomplete="off">
                    <input type="text" name="usuario" placeholder="Usuário" required>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <input type="submit" class="btn-enviar" value="Entrar">
                </form> 
            </div>
            <?php if (isset($_SESSION['erroLogin'])) { ?>
                <div class="erro-login">
                    <p>Usuário ou Senha inválido.</p>
                </div>
            <?php } unset($_SESSION['erroLogin']) ?>   
        </div>
    </div>
</body>
</html>