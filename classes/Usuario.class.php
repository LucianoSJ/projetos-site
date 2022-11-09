<?php
    class Usuario {
        public function login($usuario, $senha) {
            try {
                $sql = "SELECT * FROM tb_usuario WHERE user= :usuario AND senha = :senha";
                $sql = $GLOBALS['pdo']->prepare($sql);
                $sql->bindValue(":usuario", $usuario);
                $sql->bindValue(":senha", $senha);
                $sql->execute();
                $resultadoConsulta = $sql->fetch();
                $_SESSION['idUsuario'] = $resultadoConsulta['user']; 
                $_SESSION['nomeUsuario'] = $resultadoConsulta['nome']; 
                $_SESSION['senhaUsuario'] = $resultadoConsulta['senha']; 
                return $_SESSION['idUsuario']; 
            } catch (Exception $msg) {
                echo "Erro Login: ", $msg->getMessage();
            }
        }

        public function erroLogin() {
            $_SESSION['erroLogin'] = true;
            header('Location: index.php');
        }
    }
?>