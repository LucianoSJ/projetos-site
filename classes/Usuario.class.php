<?php
class Usuario {
    public function login($usuario, $senha) {
        try {
            $sql = "SELECT * FROM tb_usuario WHERE usuario = :usuario AND senha = :senha";
            $sql = $GLOBALS['pdo']->prepare($sql);
            $sql->bindValue(":usuario", $usuario);
            $sql->bindValue(":senha", $senha);
            $sql->execute();
            $id = $sql->fetch();
            $_SESSION['idUsuario'] = $id['senha'];  
            return $_SESSION['idUsuario'];  
        } catch (Exception $msg) {
            echo "Erro Login: ", $msg->getMessage();
        }
    }

    public function erroLogin() {
        header('Location: index.php');
    }
}
?>