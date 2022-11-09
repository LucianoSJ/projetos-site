<?php
    require_once './error_reporting.php';

    session_start();

    global $pdo;

    $localhost = "127.0.0.1:3306";
    $banco = "site_loja";
    $usuario = "root";
    $senha = "";

    try {
        $pdo = new PDO("mysql:host=$localhost; dbname=$banco", $usuario, $senha);
    } catch (PDOException $e) {
        echo "Erro com o banco de dados: ".$e->getMessage();
        exit;
    }
?>