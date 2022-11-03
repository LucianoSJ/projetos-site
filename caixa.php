<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/caixa.css">
    <title>Caixa</title>
</head>
<body>
    <iframe src="menu-caixa.html" frameborder="0" width="100%" height="30px"></iframe>
    <main>
        <div class="esquerda">
            <div class="conteudo-esquerdo1">
                <form action="" method="post">
                    <div>
                        <label for="ven">Vendedor:</label>
                        <input class="caixa-form-input" id="ven" type="text" name="vendedor">
                        <label for="cli">Cliente:</label>
                        <input class="caixa-form-input" id="cli" type="text" name="cliente">
                    </div>
                </form>
            </div>
            <div class="conteudo-esquerdo2">
                <form action="" method="post">
                    <div class="container-produto">
                        <label for="cod_b">Código de Barras:</label>
                        <input class="caixa-form-input" id="cod_b" type="text" name="cod_barras" required>
                        <label for="cod_p">Código do Produto:</label> 
                        <input class="caixa-form-input" id="cod_p" type="text" name="cod_produto" required>
                        <input id="lupa" class="form-input" type="submit" name="filtrar" value="        Filtrar"> 
                    </div>    
                    <div class="container-produto">
                        <label for="prd">Produto:</label>
                        <input class="caixa-form-input" id="prd" type="text" name="produto" required>
                    </div>
                    <div class="container-produto">
                        <label for="uni">Valor Utário:</label>
                        <input id="uni" type="text" name="valor_unitario">
                        <label for="qt">Qtd.:</label>
                        <input id="qt" type="text" name="qtd" required>
                        <label for="total">Valor Total:</label>
                        <input id="total" type="text" name="valor_total">
                        <input id="inserir" class="form-input" type="submit" name="inserir" value="        Inserir"> 
                    </div>
                </form>
            </div>
            
            <div class="conteudo-esquerdo3">
                <div class="loja-container-tabela">
                    <table class="loja-table">
                        <thead>
                            <th>Código</th>
                            <th>Produto</th>
                            <th>Valor Uni.</th>
                            <th>Qtd.</th>
                            <th>Valor Total</th>
                            <th id="excluir">Excluir</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>6</td>
                                <td id="nome-produto">Vestido com blusa moleton  Alakazoo florido</td>
                                <td class="coluna-valor">R$ 42,99</td>
                                <td>100</td>
                                <td class="coluna-valor">R$ 4.299,00</td>
                                <td><a href=""><img src="img/remover-ico.svg" alt="excluir"></a></td>
                            </tr>
                            <tr>
                                <td>3350</td>
                                <td id="nome-produto">Conj. Brandili Masc.</td>
                                <td class="coluna-valor">R$ 179,99</td>
                                <td>1</td>
                                <td class="coluna-valor">R$ 179,99</td>
                                <td><a href=""><img src="img/remover-ico.svg" alt="excluir"></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
        <div class="container-finalizar">
            <div class="container-produto">
                <label for="tot">Valor Total:</label>
                <input class="caixa-form-input" id="tot" type="text" name="total_venda">
            </div>
            <input id="final" class="form-input" type="submit" name="finalizar" value="             Finalizar Venda"> 
        </div> 
    </main>   
</body>
</html>