<?php
    class AlterarSenha {
        public function alterarSenhaUsuario($senha, $repId) {
            try {
                $sql = "UPDATE usuario SET user_senha = :senha WHERE user = :user";
                $sql = $GLOBALS['pdo']->prepare($sql);
                $sql->bindValue(":senha", $senha);
                $sql->bindValue(":user", $repId);
                $sql->execute();
                $_SESSION['senhaUsuario'] = $senha;
                $_SESSION['senhaAlterada'] = true;
            } catch (Exception $msg) {
                echo "Erro alterar senha usuário: ", $msg->getMessage();
            }
        }
    }
?>