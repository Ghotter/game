<?php

include("../models/conexao.php");
include("../models/bancoUsuario.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(inserirUsuario($conexao,$email,$senha,$pin)){
    echo("Usuario cadastrado com sucesso");
}else{
    echo("Usuario não cadastrado.");
}

include("../views/footer.php");