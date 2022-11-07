<?php
    if (empty($_SESSION['idUsuario'])) {
        header('Location: index.php');
    }
?>