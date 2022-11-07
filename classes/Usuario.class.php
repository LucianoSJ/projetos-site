<?php
class Usuario {
    public function login($usuario, $senha) {
        try {
            $sql = "SELECT * FROM representantes WHERE rep_id = :usuario AND rep_senha = :senha";
            $sql = $GLOBALS['pdo']->prepare($sql);
            $sql->bindValue(":usuario", $usuario);
            $sql->bindValue(":senha", $senha);
            $sql->execute();
            $id = $sql->fetch();
            $_SESSION['idUsuario'] = $id['rep_id'];  
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