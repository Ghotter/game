<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoUsuario.php");

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>

      <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
<?php 
$usuarios = listaTudoUsuario($conexao);
foreach($usuarios as $usuario):
?>
  <tr>
      <th scope="row"><?=$usuario['codUsu']?></th>
      <td><?=$usuario['emailUsu']?></td>
      <td><?=$usuario['senhaUsu']?></td>
      <td>
        <form action="../controllers/deletarUsuario.php" method="Post">
          <input type="hidden" name="codUsuariodeletar" value="<?=$usuario['codUsu']?>">
          <button type="submit" class="btn-small btn-danger"> X </button>
        </form>
      </td>
      <td>
        <form action="formAlterarUsuario.php" method="Post">
          <input type="hidden" name="codUsuarioalterar" value="<?=$usuario['codUsu']?>">
          <button type="submit" class="btn-small btn-danger"> Alterar</button>
        </form>
      </td>
    </tr>
<?php
endforeach;
?>
  </tbody>
</table>





<?php
include_once("footer.php");
?>