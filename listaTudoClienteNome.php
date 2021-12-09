<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoCliente.php");

?>
<div class="container m-5 p-5">
    <form action="../views/listaTudoClienteNome.php" method="GET">
        <div class="row mb-3">
            <label for="inputNome" class="col-sm-2 col-form-label">Digite o Nome do Usuario: </label>
            <div class="col-sm-3">
                <input type="text" required name="NomeCliente" class="form-control" id="inputNome">
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>

    </form>
</div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Código Usuário</th>
            <th scope="col">Cliente</th>
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomeCliente = isset($_GET['NomeCliente']) ? $_GET['NomeCliente'] : "";

        if ($nomeCliente != "") {
            $Cliente = listaTudoClienteNome($conexao, $nomeCliente);
         
            if ($Cliente) {
                
                foreach($Cliente as $Clientes) :
        ?>
                <tr>
                    <th scope="row"><?=$Clientes["codCli"] ?></th>
                    <td><?=$Clientes["codUsuFK"] ?></td>
                    <td><?=$Clientes["nomeCli"] ?></td>
                    <td><?=$Clientes["cpfCli"] ?></td>
                    <td><?=$Clientes["foneCli"] ?></td>
                    <td><?=$Clientes["datanasCli"] ?></td>
                    <td>
                        <form action="../controllers/deletarCliente.php" method="Post">
                            <input type="hidden" name="codClientedeletar" value="<?=$Clientes['codCli']?>">
                            <button type="submit" class="btn-small btn-danger"> X </button>
                        </form>
                    </td>
                    <td>
                        <form action="../views/formAlterarCliente.php" method="Post">
                            <input type="hidden" name="codClienteAlterar" value="<?=$Clientes['codCli']?>">
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
            }
        }
?>

<?php
include_once("footer.php");
?>