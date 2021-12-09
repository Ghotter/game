<?php
session_start();
include_once("../models/bancoUsuario.php");
include_once("../models/conexao.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
$acesso = buscarAcesso($conexao,$email,$senha);

if($email === $acesso){
    header("Location:../views/index.php");
}else{
    $_SESSION["msg"] ="<div class='alert alert-danger' role='alert'>Os dados não conferem.. tente novamente.</div>";
    header("Location:../views/logar.php");
}


?>