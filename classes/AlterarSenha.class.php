<?php
    class AlterarSenha {
        public function alterarSenhaRepresentante($senha, $repId) {
            try {
                $sql = "UPDATE representantes SET rep_senha = :senha WHERE rep_id = :rep_id";
                $sql = $GLOBALS['pdo']->prepare($sql);
                $sql->bindValue(":senha", $senha);
                $sql->bindValue(":rep_id", $repId);
                $sql->execute();
                $_SESSION['senhaAlterada'] = true;
            } catch (Exception $msg) {
                echo "Erro alterar senha representante: ", $msg->getMessage();
            }
        }
    }
?>