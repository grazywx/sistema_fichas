<?php
session_start();

if (isset($_SESSION['iduser'])) {
    
    require '../conexao.php';
    $id = $_SESSION['iduser'];

    $sql = "DELETE FROM users WHERE iduser = :id";
    $resultado = $conexao->prepare($sql);
    $resultado->bindValue(':id', $id);
    $resultado->execute();

    session_destroy();

    header('Location: ../loginform.php');
    exit();
} else {
    header('Location: ../index.php ');
    exit();
} 