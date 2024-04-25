<?php 

require_once "Dao.php";
$dao =new Dao();

$dados = $dao->listar();
?>
<div class="container mt-3">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Senha</th>
    </tr>
  </thead>
  <tbody>
  <?php
while($linha = $dados->fetch())
{
    ?>
    <tr>
      <th scope="row"><?php echo $linha['id']?></th>
      <td><?php echo $linha['usuario']?></td>
      <td><?php echo $linha['senha']?></td> 
    </tr>  <?php
}
?>
  </tbody>
</table>
</div>