<?php
session_start();

if(!$_SESSION['email']){
    header('Location: ../../../system/controller/logar.php');
    exit();
}
?>