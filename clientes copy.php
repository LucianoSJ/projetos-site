<?php
    require_once './verifica_sessao.php';
    require_once 'menu.php';
    require_once './classes/Clientes.class.php';

    $clientes = new Clientes();
    
    switch (isset($_POST)) {
        case isset($_POST['cadastrar']):
            $clientes->cadastrarClientes($_POST['nome'], $_POST['telefone'], $_POST['limite'], $_POST['cpf'], $_POST['rg'], $_POST['endereco'], $_POST['nascimento']);
            break;
        case isset($_POST['atualizar']):
            $Clientes->atualizarCliente(trim($_POST['pra_id']), trim($_POST['pra_vencimento1']), trim($_POST['pra_vencimento2']), trim($_POST['pra_vencimento3']), trim($_POST['pra_vencimento4']), trim($_POST['pra_vencimento5']), trim($_POST['multiplicador']));
            break;
    }

    switch (isset($_GET)) {
        case isset($_GET['editar']):
            $buscacliente = $Clientes->buscaCliente($_GET['id']);
            break;

        case isset($_GET['excluir']):
            $Clientes->excluirCliente($_GET['id']);
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
        <div class="loja-container-header">
            <header>
                <nav>
                <?php if (isset($_GET['cadastrar']) || isset($_GET['editar'])) { ?>
                    <a href="./clientes.php">Listar Clientes</a>
                <?php } ?>
                </nav>
            </header>
        </div> 

        <?php if (isset($_GET['cadastrar'])){ ?>
            <div class="loja-container-form">
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
                        <input class="loja-form-input" id="btn-enviar" type="submit" name="cadastrar" value="Enviar">
                    </form>  
                </div>  

            <?php exit; } if (isset($_GET['editar'])) {?>
             <div class="loja-container-form">        
                <div class="loja-form">
                <form action="Clientes.php" method="post" autocomplete="off">
                        <div class="titulo-loja">
                            <h1>Atualizar Clientes</h1>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $buscacliente['id'] ?>"><?php echo $buscacliente['id'] ?>
                        <input class="loja-form-input" type="text" name="nome" value="<?php echo $buscacliente['nome'] ?>" required>
                        <input class="loja-form-input" type="text" name="telefone" value="<?php echo $buscacliente['telefone'] ?>" >                    
                        <input class="loja-form-input" type="text" name="limite" value="<?php echo $buscacliente['limite_cretito'] ?>" >                    
                        <input class="loja-form-input" type="text" name="cpf" value="<?php echo $buscacliente['cpf'] ?>" required>
                        <input class="loja-form-input" type="text" name="rg" value="<?php echo $buscacliente['rg'] ?>" >
                        <input class="loja-form-input" type="text" name="endereco" value="<?php echo $buscacliente['endereco'] ?>" >
                        <input class="loja-form-input" type="text" name="nascimento" value="<?php echo $buscacliente['data_nascimento'] ?>" >
                        <input class="loja-form-input" id="btn-enviar" type="submit" name="enviar" value="Enviar">
                    </form>   
            </div>
            </div>
            <?php exit; } ?>
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
                            <td id="loja-nome"><?php echo $dadosClientes['nome'] ?></td>
                            <td><?php echo $dadosClientes['telefone'] ?></td>
                            <td><?php echo $dadosClientes['limite_cretito'] ?></td>
                            <td><?php echo $dadosClientes['cpf'] ?></td>
                            <td><?php echo $dadosClientes['rg'] ?></td>
                            <td><?php echo $dadosClientes['endereco'] ?></td>
                            <td><?php echo $dadosClientes['data_nascimento'] ?></td>
                            <td><a href=<?php echo "clientes.php?editar&id=".$dadosClientes['id'] ?>><img src="./img/editar-ico.svg" alt="editar"></a></td>
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