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
    }
?>

