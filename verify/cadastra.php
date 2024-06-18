<?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['email']) && !empty($_POST['email'])  && isset($_POST['tipo']) && !empty($_POST['tipo'])) {
            require '../conexao.php';
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $tipo = $_POST['tipo'];

            
            
            $sql = "INSERT INTO users (nome, email, senha, tipo) 
            VALUES (:nome, :email, :senha, :tipo)";
            $resultado = $conexao->prepare($sql);
            $resultado->bindValue(":nome", $nome);
            $resultado->bindValue(":email", $email);             
            $resultado->bindValue(":senha", $senha);
            $resultado->bindValue(":tipo", $tipo);
           
            $resultado->execute();
            
            header('Location: ../loginform.php?sucesso=ok');    
        }   
    }-3