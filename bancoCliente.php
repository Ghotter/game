<?php

function inserirCliente($conexao,$codigoUsuFk,$nomeCliente,$cpfCliente,$foneCliente,$dataNascCliente){
    $query="insert into tbclientes(codUsuFk,nomeCli,cpfCli,foneCli,datanasCli)values('{$codigoUsuFk}','{$nomeCliente}','{$cpfCliente}','{$foneCliente}','{$dataNascCliente}')";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoClientes($conexao){
    
    $query = "Select * From tbclientes";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoClienteCod($conexao,$codCliente){
    $query = "Select * from tbclientes where codCli={$codCliente}";
    $resultados = mysqli_query($conexao,$query);
    $resul= mysqli_fetch_array($resultados);
    return $resul;
}

function listaClienteUsuario($conexao,$codUsuario){
    $query = "Select * from tbusuarios where codUsu={$codUsuario}";
    $resultados = mysqli_query($conexao,$query);
    $resul= mysqli_fetch_array($resultados);
    return $resul;
}

function alterarCliente($conexao,$codigoUsuFk,$codCli,$nomeCliente,$cpfCliente,$foneCliente,$dataNascCliente){


    
$query = "update tbclientes set 
codUsuFK = '{$codUsuFK}',
nomeCli = '{$nomeCli}', 
cpfCli = '{$cpfCli}', 
foneCli = '{$foneCli}',
datanasCli = '{$datanasCli}' 
where codCli = '{$codCli}'";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}

function deletarCliente($conexao,$codCli){
    $query = "delete from tbjogos where codCli = $codCli";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoClienteNome($conexao, $nomeCliente){
    $query = "select * from tbclientes where nomeCli like '%{$nomeCliente}%'";
    $resultados = mysqli_query($conexao,$query);
  
    return $resultados; 
}










