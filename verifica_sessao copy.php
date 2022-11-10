<?php
    require_once './config/conexao.php';

    if (empty($_SESSION['idUsuario'])) {
        header('Location: index.php');
    }
?>