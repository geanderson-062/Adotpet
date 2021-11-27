<?php
session_start();
include("conexao.php");

    $nome = mysqli_real_escape_string($conexao, ($_POST['nome']));
    $email= mysqli_real_escape_string($conexao, ($_POST['email']));
    $telefone = mysqli_real_escape_string($conexao, ($_POST['telefone']));
    $assunto = mysqli_real_escape_string($conexao, ($_POST['assunto']));
    $mensagem = mysqli_real_escape_string($conexao, ($_POST['mensagem']));

    $sql = mysqli_query($conexao, "INSERT INTO contato (nome, email, telefone, assunto, mensagem, data_cadastro) VALUES ('$nome','$email','$telefone', '$assunto', '$mensagem', NOW())");

    $conexao->close();

    header("Location: ../../../index.html");
    exit();
?>