<?php
    require_once './config/conexao.php';
    require_once './classes/Usuario.class.php';

    $usuario = new Usuario(); 

    if ($usuario->login($_POST['usuario'], $_POST['senha'])) {
        header("Location: menu.php");            
    } else {   
        $usuario->erroLogin();
    }
?>