<?php
    require_once './verifica_sessao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="js.js"></script>
    <title>Menu</title>
</head>
<body>
    <main>
        <nav>
            <ul id="ul-principal">
                <li class="li-p">
                    <a href="javascript://" class="bt1">Caixa
                         <img src="img/seta-preta.png" width="15">
                    </a>
                    <ul class="ul-caixa">
                        <li><a href="./caixa.php">Abrir</a></li>
                        <li><a href="./logout.php">Fechar</a></li>
                        <li><a href="">Retirar</a></li>
                        <li><a href="">Acresecentar</a></li>
                    </ul>
                </li>
                <li class="li-p">
                    <a href="javascript://" class="bt2">Cadastros
                        <img src="img/seta-preta.png" width="15">
                    </a>
                    <ul class="ul-cadastros">
                        <li><a href="usuarios.php">Usuário</a></li>
                        <li><a href="clientes.php">Clientes</a></li>
                        <li><a href="fornecedores.php">Fornecedores</a></li>
                        <li><a href="produtos.php">Produtos</a></li>
                    </ul>
                </li>
                <li class="li-p">
                    <a href="javascript://" class="bt3">Relatórios
                        <img src="img/seta-preta.png" width="15">
                    </a>
                    <ul class="ul-relatorios">
                        <li><a href="caixa.php">Vendas</a></li>
                        <li><a href="usuarios.php">Usuário</a></li>
                        <li><a href="clientes.php">Clientes</a></li>
                        <li><a href="fornecedores.php">Fornecedores</a></li>
                        <li><a href="produtos.php">Produtos</a></li>
                    </ul>
                </li>
                <li class="li-p">
                    <a href="javascript://" class="bt4">Estoque
                        <img src="img/seta-preta.png" width="15">
                    </a>
                    <ul class="ul-estoque">
                        <li><a href="">Entrada</a></li>
                        <li><a href="">Saída</a></li>
                    </ul>
                </li>
                <li class="li-p"><a href="">Backup</a></li>
                <li class="li-p"><a href="">Sobre</a></li>
                <li class="li-p"><a href="./logout.php">Sair</a></li>
            </ul>
        </nav>
    </main>
</body>
</html>