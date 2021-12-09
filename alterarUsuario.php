<?php

include("../models/conexao.php");
include("../models/bancoUsuario.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarUsuario($conexao,$codigo,$email,$senha,$pin)){
    echo("Usuario Alterado com sucesso");
}else{
    echo("Usuario não Alterado.");
}

include("../views/footer.php");