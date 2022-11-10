<?php
    require_once './verifica_sessao.php';
    require_once 'menu.php';
    require_once './classes/Clientes.class.php';

    $clientes = new Clientes();
    $listaClientes = $clientes->listaClientes();
    
    switch (isset($_POST)) {
        case isset($_POST['enviar']):
            $clientes->cadastrarClientes($_POST['nome'], $_POST['telefone'], $_POST['limite'], $_POST['cpf'], $_POST['rg'], $_POST['endereco'], $_POST['nascimento']);
            break;
        
        default:
            $listaClientes;
            break;
    }
    $listaClientes;    
?>
<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Clientes</title>
</head>
<body>
    <main>
        <?php if (isset($_GET['cadastrar']) || isset($_GET['editar'])) { ?>
            <div>
                <header>
                <nav>
                        <a href="./clientes.php">Listar Clientes</a>
                    </nav>
                </header>
            </div> 

            <?php } ?>

            <div class="loja-container-form">
                <?php if (isset($_GET['cadastrar'])) { ?>
                <div class="loja-form">
                    <form action="Clientes.php" method="post" autocomplete="off">
                        <div class="titulo-loja">
                            <h1>Cadastrar Clientes</h1>
                        </div>
                        <input class="loja-form-input" type="text" name="nome" placeholder="Nome" required>
                        <input class="loja-form-input" type="text" name="telefone" placeholder="Telefone">                    
                        <input class="loja-form-input" type="text" name="limite" placeholder="Limite de Crédito">                    
                        <input class="loja-form-input" type="text" name="cpf" placeholder="CPF" required>
                        <input class="loja-form-input" type="text" name="rg" placeholder="RG">
                        <input class="loja-form-input" type="text" name="endereco" placeholder="Endereço">
                        <input class="loja-form-input" type="text" name="nascimento" placeholder="Data de Nascimento">
                        <input class="loja-form-input" id="btn-enviar" type="submit" name="enviar" value="Enviar">
                    </form>  
                </div>  
                <?php exit; } if (isset($_GET['editar'])) { ?>
                <div class="loja-form">
                    <form action="" method="post" autocomplete="off">
                        <div class="titulo-loja">
                            <h1>Atualizar Clientes</h1>
                </div>
                        <div>
                            <div>
                                <input type="hidden" name="" value="1">1
                            </div>
                            <input class="taranto-form-input" type="text" name="" placeholder="Nome" value="repNome" required>
                            <input class="taranto-form-input" type="text" name="" placeholder="Senha" value="repSenha" required>
                            <input class="taranto-form-input" type="submit" name="" value="Enviar">
                        </div>
                    </form>  
            </div>
            <?php exit; } ?>

           <!--  
            <div>
                <p class="loja-msg-azul">Cliente 1 atualizado!</p>
                <p class="loja-msg-vermelho">Cliente excluído!</p>
            </div> -->
        </div>        



        <div class="loja-container-tabela">
            <table class="loja-table">
                <thead>
                     <th>Código</th>
                     <th>Nome</th>
                     <th>Telefone</th>
                     <th>Limite de Crédito</th>
                     <th>CPF</th>
                     <th>RG</th>
                     <th>Endereço</th>
                     <th>Data de Nascimento</th>
                     <th>Editar</th>
                     <th>Excluir</th>
                     <th>Novo</th>
                </thead>
                <tbody>
                <?php foreach ($listaClientes as $dadosClientes) { ?>
                        <tr>
                            <td><?php echo $dadosClientes['id'] ?></td>
                            <td><?php echo $dadosClientes['nome'] ?></td>
                            <td><?php echo $dadosClientes['telefone'] ?></td>
                            <td><?php echo $dadosClientes['limite_cretito'] ?></td>
                            <td><?php echo $dadosClientes['cpf'] ?></td>
                            <td><?php echo $dadosClientes['rg'] ?></td>
                            <td><?php echo $dadosClientes['endereco'] ?></td>
                            <td><?php echo $dadosClientes['data_nascimento'] ?></td>
                            <td><a href=<?php echo "clientes.php?editar&rep_id=" . $dadosClientes['id'] ?>><img src="./img/editar-ico.svg" alt="editar"></a></td>
                            <td><a href=<?php echo "clientes.php?excluir&rep_id=" . $dadosClientes['rep_id'] ?>><img src="./img/remover-ico.svg" alt="excluir"></a></td>
                            <td><a href="clientes.php?cadastrar"><img src="./img/cadastrar-rep.svg" alt="cadastrar"></a></td>
                        </tr>
                    <?php } ?>                    
                </tbody>
            </table>
        </div>        
    </main>
</body>
</html>