<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoPedido.php");
include_once("../models/bancoFuncionario.php");
include_once("../models/bancoCliente.php");
$codUsuFK = $_SESSION["codigoUsuario"];
$funcionario = listabuscafunUsu($conexao,$codUsuFK);

?>

<div class="row g-3">
  <div class="col-md-3">
    <label for="inputcodfun" class="form-label">Código</label>
    <input type="text" readonly value="<?php echo($funcionario["codFun"])?>" class="form-control" id="inputcodfun" placeholder="1234">
  </div>
  <div class="col-md-9">
    <label for="inputNomeFun" class="form-label">Funcionário</label>
    <input type="text" readonly value="<?php echo($funcionario["nomeFun"])?>" class="form-control" id="inputNomeFun" placeholder="Vinicius da Silva">
  </div>
  <?php
  $codCliente = isset($_POST["codCliente"])?$_POST["codCliente"]:0;
  ?>
  <div class="col-md-3">
    <label for="inputcodCli" class="form-label">Código</label>
    <form method="post" action="cadastropedido.php">
    <div class="d-grid gap-3 d-md-flex justify-content-md-end">
    <input type="text" value="<?=$codCliente?>" class="form-control" id="inputcodCli"  required name="codCliente">
    
        <button type="submit" class="btn btn-info me-md-2" >
           Buscar
        </button>
    </a>
  </div>
  </form>
  </div>
  <?php

$clientes = isset($codCliente)?listaTudoClienteCod($conexao, $codCliente):"";
$_SESSION["codigoCliente"] = isset($_POST["codCliente"])?$_POST["codCliente"]:"0";
  ?>
  <div class="col-md-9">
    <label for="inputNomeCli" class="form-label">Cliente</label>
    <input type="text" value="<?=$clientes['nomeCli']?>" class="form-control" id="inputNomeCli" placeholder="Vinicius da Silva">
  </div>
  <div class="col-md-3">
    <label for="inputcodJogo" class="form-label">Código</label>
    <div class="d-grid gap-3 d-md-flex justify-content-md-end">
    <input type="text" class="form-control" id="inputcodCli">
    <button class="btn btn-primary me-md-2" type="submit">Buscar</button>
  </div>
  </div>
  <div class="col-md-3">
    <label for="inputNomeJogo" class="form-label">Jogo</label>
    <input type="text" class="form-control" id="inputNomeJogo" placeholder="Vinicius da Silva">
  </div>
  <div class="col-md-2">
    <label for="inputQtd" class="form-label">Quantidade</label>
    <select id="inputQtd" class="form-select">
      <option selected>Escolha...</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
      <option value=5>5</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputValorUni" class="form-label">Valor Unitário</label>
    <input type="text" class="form-control" id="inputValorUni">
  </div>
  <div class="col-md-2">
    <label for="inputTotal" class="form-label">Total</label>
    <input type="text" class="form-control" id="inputTotal">
  </div>
  
  <div class="col-12 ">
    <div  class=" d-flex">
    <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
  </div>
</div>

<?php
include_once("footer.php");
?>