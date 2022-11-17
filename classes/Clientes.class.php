<?php
    class Clientes {
        public function listaClientes() {
            try {
                $sql = "SELECT * FROM tb_cliente ORDER BY nome";
                $sql = $GLOBALS['pdo']->prepare($sql);
                $sql->execute();
                $resultadoConsulta = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $resultadoConsulta;
            } catch (Exception $msg) {
                echo "Erro ao acessar Clientes: ", $msg->getMessage();
            }
        }

        public function cadastrarClientes($nome, $telefone, $limite, $cpf, $rg, $endereco, $nascimento) {
            try {
                $sql = "INSERT INTO tb_cliente (nome, telefone, limite_cretito, cpf, rg, endereco, data_nascimento) VALUES (:nome, :telefone, :limite, :cpf, :rg, :endereco, :nascimento)";
                $sql = $GLOBALS['pdo']->prepare($sql);
                $sql->bindValue(":nome", $nome);
                $sql->bindValue(":telefone", $telefone);
                $sql->bindValue(":limite", $limite);
                $sql->bindValue(":cpf", $cpf);
                $sql->bindValue(":rg", $rg);
                $sql->bindValue(":endereco", $endereco);
                $sql->bindValue(":nascimento", $nascimento);
                $sql->execute();
                $_SESSION['ClienteCadastrado'] = true;
            } catch (Exception $msg) {
                echo "Erro ao cadastrar Cliente: ", $msg->getMessage();
            }
        }

        public function buscasCliente($id){
            try {
                $sql = "SELECT * FROM tb_cliente WHERE id = :id";
                $sql = $GLOBALS['pdo']->prepare($sql);
                $sql->bindValue(":id", $id);
                $sql->execute();
                $resultadoConsulta = $sql->fetch();
                return $resultadoConsulta;
            }catch(Exception $msg){
                echo "Erro Busca Cliente: ", $msg->getMessage();
            }
        }

        public function atualizarCliente($id, $nome, $telefone, $limite_cretito, $cpf, $rg, $endereco, $data_nascimento) {
            try {
                $sql = "UPDATE tb_cliente SET nome = :nome, telefone = :telefone, limite_cretito = :limite_cretito, cpf = :cpf, rg = :rg, endereco = :endereco, data_nascimento = :data_nascimento WHERE id = :id";
                $sql = $GLOBALS['pdo']->prepare($sql);
                $sql->bindValue(":id", $id);
                $sql->bindValue(":nome", $nome);
                $sql->bindValue(":telefone", $telefone);
                $sql->bindValue(":limite_cretito", $limite_cretito);
                $sql->bindValue(":cpf", $cpf);
                $sql->bindValue(":rg", $rg);
                $sql->bindValue(":endereco", $endereco);
                $sql->bindValue(":data_nascimento", $data_nascimento);
                $sql->execute();
                echo "<p class='loja-msg-azul'>Cliente $id atualizado!</p>"; 
            }catch (Exception $msg){
                echo "Erro atualizar cliente: ", $msg->getMessage();
            }
        }

        public function excluirCliente($id){
            try {
                $sql = "DELETE FROM tb_cliente  WHERE id = :id";
                $sql = $GLOBALS['pdo']->prepare($sql);
                $sql->bindValue(":id", $id);
                $sql->execute();
                echo "<p class='loja-msg-vermelho'>Cliente $id excluído!</p>";
            }catch(Exception $msg){
                echo "Erro Excluir Cliente: ", $msg->getMessage();
            }
        }
    }
?>

