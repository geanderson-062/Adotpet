<?php
session_start();
include("conexao.php");

$nome= mysqli_real_escape_string($conexao, ($_POST['nome']));
$cpf= mysqli_real_escape_string($conexao, ($_POST['cpf']));
$tel= mysqli_real_escape_string($conexao, ($_POST['tel']));
$endereco= mysqli_real_escape_string($conexao, ($_POST['endereco']));
$email= mysqli_real_escape_string($conexao, ($_POST['email']));
$senha= mysqli_real_escape_string($conexao, MD5($_POST['senha']));

    $sql = mysqli_query($conexao, "SELECT email FROM usuarios WHERE email = '$email'");
    $row = mysqli_num_rows($sql);

    if(($row) > '0'){
        $_SESSION['email'] = true;
        header("Location: ../../../system/views/screans/falha_cadastro.html");
        exit;
    }else{
        $sql = mysqli_query($conexao, "INSERT INTO usuarios (nome, cpf, tel, endereco, email, senha, data_cadastro) VALUES ('$nome','$cpf','$tel','$endereco','$email','$senha', NOW())");
        header("Location: ../../../system/views/screans/confirmacao_cadastro.html");
        exit;
    }

    $conexao->close();
?>