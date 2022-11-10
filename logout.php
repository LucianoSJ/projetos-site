<?php
    require_once './config/conexao.php';

    if (isset($_SESSION['idUsuario'])) {
        session_destroy();
        header("Location:index.php");
    }
?>