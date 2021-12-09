<?php 
    function inserirfun($conexao,$codUsuFK,$nomeFun,$funcaoFun,$foneFun,$datanasFun){

        $query="insert into tbfuncionarios(codUsuFK,nomeFun,funcaoFun,foneFun,datanasFun)values('{$codUsuFK}','{$nomeFun}','{$funcaoFun}','{$foneFun}','{$datanasFun}')";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listafun($conexao){
        $query="Select * From tbfuncionarios";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listafunCod($conexao,$codFun){
        $query="Select * from tbfuncionarios where codFun={$codFun}";
        $resultados=mysqli_query($conexao,$query);
        $resul=mysqli_fetch_array($resultados);
        return $resul;
    }
    function alterarfun($conexao,$nomeFun,$funcaoFun,$foneFun,$datanasFun){
        $query="update tbfuncionarios set nomeFun='{$nomeFun}', funcaoFun='{$funcaoFun}', foneFun = '{$foneFun}' where datanasFun = '{$datanasFun}'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function deletarfun($conexao,$codFun){
        $query="delete from tbfuncionarios where codFun=$codFun";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listabuscafun($conexao,$nomeFun){
        $query = "select * from tbfuncionarios where nomeFun like '%{$nomeFun}%'";
        $resultados = mysqli_query($conexao,$query);
        return $resultados;
    }
    function listabuscafunUsu($conexao,$codUsuFK){
        $query = "select * from tbfuncionarios where codUsuFK ='{$codUsuFK}'";
        $resultados = mysqli_query($conexao,$query);
        $resul=mysqli_fetch_array($resultados);
   
        return $resul;
    }

?>