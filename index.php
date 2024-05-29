<?php
session_start();
if (!isset($_SESSION{'iduser'})) {
    header('Location: ./loginform.php');
}
echo $_SESSION['nome'];
?>
<a href="verify/logout.php">sair da conta</a>
