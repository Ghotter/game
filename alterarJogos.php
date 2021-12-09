<?php

include("../models/conexao.php");
include("../models/bancoJogos.php");
include("../views/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarJogos($conexao,$codigo,$jogo,$tamanho,$preco,$requisitos,$console,$classificacao,$avaliacao)){
    echo("Jogo Alterado com sucesso");
}else{
    echo("Jogo não Alterado.");
}

include("../views/footer.php");