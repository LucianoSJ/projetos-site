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
        <form action="" method="post">
            <div>
                <input class="usuario" type="text" name="usuario" placeholder="Digite o Usuário" required>
            </div>
            <div>
                <input class="senha" type="password" name="senha" placeholder="Digite a Senha" required>
            </div>
            <div>
                <input type="submit" class="btn-enviar" value="Entrar">
            </div>

            <? if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
                <div class="text-danger">
                    Usuário ou senha inválido(s)!
                </div>
            <? } ?>

            <? if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>
                <div class="text-danger">
                    Faça o login antes de acessar as páginas!
                </div>
            <? } ?>

        </form>
    </div>
</body>
</html>