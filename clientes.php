<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/admin.css">
    <title>Clientes</title>
</head>
<body>
    <iframe src="menu.html" frameborder="0" width="100%" height="70px"></iframe>
    <main>
        <div class="loja-container-form">
            <div class="loja-form">
                <form action="" method="post">
                    <div class="titulo-loja">
                        <h1>Cadastrar Cliente</h1>
                    </div>
                    <input class="loja-form-input" type="number" name="rep_id" placeholder="Código" required>
                    <input class="loja-form-input" type="text" name="rep_celular" placeholder="Celular">                    
                    <input class="loja-form-input" type="text" name="rep_limite" placeholder="Limite de Crédito">                    
                    <input class="loja-form-input" type="text" name="rep_nome" placeholder="Nome" required>
                    <input class="loja-form-input" type="text" name="rep_cpf" placeholder="CPF">
                    <input class="loja-form-input" type="text" name="rep_rg" placeholder="RG">
                    <input class="loja-form-input" type="text" name="rep_endereco" placeholder="Endereço">
                    <input class="loja-form-input" type="text" name="rep_data_nascinento" placeholder="Data de Nascimento">
                    <input class="loja-form-input" id="btn-enviar" type="submit" name="enviar" value="Enviar">
                 </form>  
            </div> 
            <div>
                <p class="loja-msg-azul">Cliente 1 atualizado!</p>
                <p class="loja-msg-vermelho">Cliente excluído!</p>
            </div>
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
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Luciano Santos de Jesus</td>
                        <td>(11)9 4562-7718</td>
                        <td>R$ 1.000,00</td>
                        <td>187.168.492-90</td>
                        <td>33.158.385-6</td>
                        <td>Rua Lima Barreto, 30 - Jd. Primavera</td>
                        <td>02/12/1979</td>
                        <td><a href=""><img src="img/editar-ico.svg" alt="editar"></a></td>
                        <td><a href=""><img src="img/remover-ico.svg" alt="excluir"></a></td>
                        <td><a href=""><img src="img/cadastrar-rep.svg" alt="cadastrar"></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Daniel Judice de Jesus</td>
                        <td>(11)9 4982-7718</td> 
                        <td>R$ 1.250,00</td> 
                        <td>287.398.125-95</td>
                        <td>32.718.285-8</td>
                        <td>Rua Lima Barreto, 30 - Jd. Primavera</td> 
                        <td>15/03/2009</td>        
                        <td><a href=""><img src="img/editar-ico.svg" alt="editar"></a></td>
                        <td><a href=""><img src="img/remover-ico.svg" alt="excluir"></a></td>
                        <td><a href=""><img src="img/cadastrar-rep.svg" alt="cadastrar"></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Suellen Santos de Jesus</td>
                        <td>(11)9 4972-7318</td>  
                        <td>R$ 2.158,95</td>
                        <td>4335.168.975-82</td>                        
                        <td>45.778.325-7</td>
                        <td>Rua Lima Barreto, 30 - Jd. Primavera</td> 
                        <td>04/10/1986</td>                
                        <td><a href=""><img src="img/editar-ico.svg" alt="editar"></a></td>
                        <td><a href=""><img src="img/remover-ico.svg" alt="excluir"></a></td>
                        <td><a href=""><img src="img/cadastrar-rep.svg" alt="cadastrar"></a></td>
                    </tr>                    
                </tbody>
            </table>
        </div>        
    </main>
</body>
</html>