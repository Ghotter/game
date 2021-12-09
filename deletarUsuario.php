<?php

include("../models/conexao.php");
include("../models/bancoUsuario.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deletarUsuario($conexao,$codUsuariodeletar)){
    echo("Usuario deletado com sucesso");
}else{
    echo("Usuario não deletado.");
}

include("../views/footer.php");