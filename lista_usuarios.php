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
      <td><a href="exibirUsuario.php?<?php echo $linha['id']?>"http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
  <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
</svg></td>
    </tr>  <?php
}
?>
  </tbody>
</table>
</div>