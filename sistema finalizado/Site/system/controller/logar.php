<?php
session_start();
include("conexao.php");

    $email= mysqli_real_escape_string($conexao, ($_POST['email']));
    $senha= mysqli_real_escape_string($conexao, ($_POST['senha']));
    
    $sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' AND senha = MD5('$senha')");

    $row = mysqli_num_rows($sql);

    if(($row) == '1'){
        $_SESSION['email'] = true;
        header("Location: ../../../system/views/screans/perfil.php");
        exit();
    }else{
        $_SESSION['nao_autenticado'] = true;
        header("Location: ../../../system/views/screans/login.php");
        exit();
    }

    $conexao->close();
?>