<?php
session_start();
$email = isset($_SESSION["emailUsuario"])?$_SESSION["emailUsuario"]:null;
if($email != null){
    include("../views/header.php");
}
    
?>  
 
    <form class="formlogin" action="../controllers/inserirUsuario.php" method="post">
       
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputpin" class="form-label">PIN</label>
                <input type="text" name="pin" class="form-control" id="exampleInputpin">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
           
        </form>
  
<?php

if($email != null){
include("../views/footer.php");
}
?>