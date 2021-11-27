<?php
session_start();
include("conexao.php");

    $nome= mysqli_real_escape_string($conexao, ($_POST['nome']));
    $email= mysqli_real_escape_string($conexao, ($_POST['email']));
    $telefone= mysqli_real_escape_string($conexao, ($_POST['telefone']));
    $endereco= mysqli_real_escape_string($conexao, ($_POST['endereco']));
    $cidade= mysqli_real_escape_string($conexao, ($_POST['cidade']));
    $bairro= mysqli_real_escape_string($conexao, ($_POST['bairro']));
    $uf= mysqli_real_escape_string($conexao, ($_POST['uf']));

    $sql = mysqli_query($conexao, "INSERT INTO divulgar (nome, email, telefone, endereco, cidade, bairro, uf) VALUES ('$nome','$email','$telefone', '$endereco','$cidade', '$bairro', '$uf')");

    $conexao->close();

    header("Location: ../../../system/views/screans/confirmacao_divulgacao.php");
    exit();
?>