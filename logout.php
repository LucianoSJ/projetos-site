<?php
    require_once './config/conexao.php';
    if (isset($_SESSION['logado'])) {
        session_destroy();
        header("Location:index.php");
    }
?>