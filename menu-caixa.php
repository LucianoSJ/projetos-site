<?php
    require_once './verifica_sessao.php';
    $usuario = new Usuario(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/menu-caixa.css">
    <title>Menu</title>
</head>
<body>
    <main>
        <div class="loja-container">
            <header>
                <div class="loja-logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div>
                    <nav class="loja-menu">
                        <ul>
                            <li><a href="">Menu</a></li>
                            <li><a href="">Consultar Produto</a></li>
                            <li><a href="">Consultar Cliente</a></li>
                            <li><a href="">Sair</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>
    </main>
</body>
</html>