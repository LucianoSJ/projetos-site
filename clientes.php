<?php
     require_once './verifica_sessao.php';
     require_once 'menu.php';
     require_once './classes/Clientes.class.php';
 
     $clientes = new Clientes();

     switch (isset($_POST)) {
        case isset($_POST['cadastrar']):
            $clientes->cadastrarClientes($_POST['nome'], $_POST['telefone'], $_POST['limite_cretito'], $_POST['cpf'], $_POST['rg'], $_POST['endereco'], $_POST['data_nascimento']);
            break;
        case isset($_POST['atualizar']):
            $clientes->atualizarCliente(trim($_POST['id']), trim($_POST['nome']), trim($_POST['telefone']), trim($_POST['limite_cretito']), trim($_POST['cpf']), trim($_POST['rg']), trim($_POST['endereco']), trim($_POST['data_nascimento']));
            break;
    }
    
    switch (isset($_GET)) {
        case isset($_GET['editar']):
            $buscascliente = $clientes->buscasCliente($_GET['id']);
            break;

        case isset($_GET['excluir']):
            $clientes->excluirCliente($_GET['id']);
            break;
    }
    $listaClientes = $clientes->listaClientes();  
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
        <?php if (isset($_GET['cadastrar']) || isset($_GET['editar'])){ ?>
            <div class="loja-container-header">
                <header>
                    <nav id="listar">
                        <?php if (isset($_GET['cadastrar']) || isset($_GET['editar'])) { ?>
                            <a  href="./clientes.php">Listar Clientes</a>
                        <?php } ?>
                    </nav>
                </header>
            </div> 
        <?php } ?>

        <?php if (isset($_GET['cadastrar'])){ ?>
            <div class="loja-container-form">
                <div class="loja-form">
                    <form action="Clientes.php" method="post" autocomplete="off">
                        <div class="titulo-loja">
                            <h1>Cadastrar Clientes</h1>
                        </div>
                        <input class="loja-form-input" type="text" name="nome" placeholder="Nome" required>
                        <input class="loja-form-input" type="text" name="telefone" placeholder="Telefone">                    
                        <input class="loja-form-input" type="text" name="limite_cretito" placeholder="Limite de Crédito">                    
                        <input class="loja-form-input" type="text" name="cpf" placeholder="CPF" required>
                        <input class="loja-form-input" type="text" name="rg" placeholder="RG">
                        <input class="loja-form-input" type="text" name="endereco" placeholder="Endereço">
                        <input class="loja-form-input" type="text" name="data_nascimento" placeholder="Data de Nascimento">
                        <input class="loja-form-input" id="btn-enviar" type="submit" name="cadastrar" value="Enviar">
                    </form>
                </div>
            </div>
        <?php exit; } if (isset($_GET['editar'])) { ?>
            <div class="loja-container-form">
                <div class="loja-form">
                    <form action="Clientes.php" method="post" autocomplete="off">
                        <div class="titulo-loja">
                            <h1>Atualizar Clientes</h1>
                        </div>
                        <input class="loja-form-input" type="text" name="id" value="<?php echo $buscascliente['id'] ?>" required>
                        <input class="loja-form-input" type="text" name="nome" value="<?php echo $buscascliente['nome'] ?>" required>
                        <input class="loja-form-input" type="text" name="telefone" value="<?php echo $buscascliente['telefone'] ?>" >                    
                        <input class="loja-form-input" type="text" name="limite_cretito" value="<?php echo $buscascliente['limite_cretito'] ?>" >                    
                        <input class="loja-form-input" type="text" name="cpf" value="<?php echo $buscascliente['cpf'] ?>" required>
                        <input class="loja-form-input" type="text" name="rg" value="<?php echo $buscascliente['rg'] ?>" >
                        <input class="loja-form-input" type="text" name="endereco" value="<?php echo $buscascliente['endereco'] ?>" >
                        <input class="loja-form-input" type="text" name="data_nascimento" value="<?php echo $buscascliente['data_nascimento'] ?>" >
                        <input class="loja-form-input" id="btn-enviar" type="submit" name="atualizar" value="Enviar">
                    </form>
                </div>
            </div>
        <?php exit; } ?>

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
                            <td id="loja-nome"><?php echo $dadosClientes['nome'] ?></td>
                            <td><?php echo $dadosClientes['telefone'] ?></td>
                            <td><?php echo $dadosClientes['limite_cretito'] ?></td>
                            <td><?php echo $dadosClientes['cpf'] ?></td>
                            <td><?php echo $dadosClientes['rg'] ?></td>
                            <td><?php echo $dadosClientes['endereco'] ?></td>
                            <td><?php echo $dadosClientes['data_nascimento'] ?></td>
                            <td><a href=<?php echo "clientes.php?editar&id=".$dadosClientes['id'] ?>><img src="img/editar-ico.svg" alt="editar"></a></td>
                            <td><a href=<?php echo "clientes.php?excluir&id=".$dadosClientes['id'] ?>><img src="./img/remover-ico.svg" alt="excluir"></a></td>
                            <td><a href="clientes.php?cadastrar"><img src="img/adicionar.svg" alt="cadastrar"></a></td>
                        </tr>
                    <?php } ?> 
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>