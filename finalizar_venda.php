<?php
    require_once './verifica_sessao.php';
    require_once 'menu.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/finalizar_venda.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Finalizar Venda</title>
</head>
<body>
    <main>  
        <div class="container-principal">
            <div class="container-esquerdo">
                <div class="conteinei-finalizar-venda">
                    <form action="" method="post">
                        <div class="container-produto">
                        <label for="qt_itens">Qtd. item(s):</label>
                            <input  class="caixa-form-input" id="qt_itens" type="text" name="qtd_itens">
                        </div>
                        <div class="container-produto">
                        <label for="cod_venda">Código da Venda:</label>
                            <input class="caixa-form-input" id="cod_venda" type="text" name="codigo_venda">
                        </div>
                        <div class="container-produto">
                            <label for="st">Status da Venda:</label>
                            <input class="caixa-form-input" id="st" type="text" name="status">
                        </div>
                        <div class="container-produto">
                            <label for="tot">Valor Total da Venda:</label>
                            <input class="caixa-form-input" id="tot" type="text" name="total_venda">
                        </div>
                        <div class="container-produto">
                            <label for="desc">Desconto:</label>
                            <input class="caixa-form-input" id="desc" type="text" name="desconto">
                        </div>  
                        <div class="container-produto">
                            <label for="valor_ent">Valor de Entrada:</label>
                            <input class="caixa-form-input" id="valor_ent" type="text" name="valor_entrada">
                        </div>
                        <div class="container-produto">
                            <label for="ent">Forma de Entrada:</label>
                            <input class="caixa-form-input" id="ent" type="text" name="entrada">
                        </div>
                        <div class="container-produto">
                            <label for="for_pg">Forma de Pagameno:</label>
                            <input class="caixa-form-input" id="for_pg" type="text" name="forma_pg">
                        </div>  
                        <div class="container-produto">
                            <label for="av_d">Avista em Dinheiro:</label>
                            <input class="caixa-form-input" id="av_d" type="text" name="avista_dinheiro">
                        </div>
                        <div class="botao-finalizar">
                            <input id="final" class="form-input" type="submit" name="finalizar" value="  Concluir Venda">
                        </div>                                                                                             
                    </form>
                </div>
                     <!--  Parcelas-->   
                     <div class="parcelamento-table">
                        <table>
                            <thead>
                                <th>Parcelas</th>
                                <th>Valor</th>
                                <th>Data</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1/2</td>
                                    <td>R$ 100,00</td>
                                    <td>01/11/2022</td>
                                </tr>
                                <tr>
                                    <td>2/2</td>
                                    <td>R$ 100,00</td>
                                    <td>01/12/2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
            <div class="forma-pagamento">
                <h1>Formas de pagamento</h1>
                <div>
                    <input id="dinheiro" class="botoes-pg" type="submit" name="finalizar" value="Dinheiro">
                </div>
                <div>
                    <input id="pix" class="botoes-pg" type="submit" name="pix" value="PIX">
                </div>
                <div>
                    <input id="debito" class="botoes-pg" type="submit" name="debito" value="Débito">
                </div>
                <div>
                    <input id="credito" class="botoes-pg" type="submit" name="credito" value="Crédito">
                </div>
                <div>
                    <input id="promissoria" class="botoes-pg" type="submit" name="promissoria" value="Promissória">
                </div>
                <div>
                    <input id="boleto" class="botoes-pg" type="submit" name="boleto" value="Boleto">                     
                </div>
            </div>
        </div> 
    </main>
</body>
</html>