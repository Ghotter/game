<?php
    include_once("header.php");
    include_once("../models/conexao.php");
    include_once("../models/bancoUsuario.php");
?>  
    <form method="Post" action="../controllers/alterarUsuario.php">
<?php
$codUsuario = $_POST["codUsuarioalterar"];
$usuario = listaTudoUsuarioCod($conexao,$codUsuario);

?>
 <p>Código <input type="text" name="codigo" value="<?=$usuario['codUsu'] ?>"></p>
         <p>E-mail: <input type="text" name="email" value="<?=$usuario['emailUsu'] ?>"></p>
        <p>Senha: <input type="password" name="senha" value="<?=$usuario['senhaUsu'] ?>"></p>
        <p>Pin: <input type="pin" name="pin" value="<?=$usuario['pinUsu'] ?>"></p>
        <button type="submit">Salvar</button>
    </form>
<?php
include("../views/footer.php");
?>