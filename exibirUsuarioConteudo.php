<?php
echo $_GET['id'];
$resultado = $dao->exibirUsuarioConteudo($id);
$linha = $dados->fetch();

?>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dados do usuario</h5>
    <p class="card-text">
        Usuario: <?php echo $linha["usuario"]?><br>
        Senha: <?php echo $linha["senha"];?><br>
    </p>
    <a href="lista_usuarios.php" class="btn btn-primary">Go somewhere</a>
  </div>
</div>