<?php
    if (isset($_POST['submit'])) {
       
        if (isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['email']) && !empty($_POST['email'])) {
            session_start();
            require '../conexao.php';
            
            $senha = $_POST['senha'];
            $email = $_POST['email'];
            
            $sql = "SELECT * FROM users WHERE  senha = :senha AND email = :email";
            $resultado = $conexao->prepare($sql);
             
            $resultado->bindValue(":senha", $senha); 
            $resultado->bindValue(":email", $email);
            
            $resultado->execute();
            
            if ($resultado->rowCount() > 0) {
                $dado = $resultado->fetch();

                $_SESSION['iduser'] = $dado['iduser'];
                $_SESSION['nome'] = $dado['nome'];
                
                if ($dado['tipo'] === 'medico') {
                    header("Location: ../medicotela.php");
                    exit;
                } elseif ($dado['tipo'] === 'paciente') {
                    header("Location: ../index.php");
                    exit;
                } else{
                    header("Location: ../loginform.php?erro=ok");
                    exit;
                } 
        
            }
           
        }
    }
   