<?php
    if(isset($_POST['submitCad'])){

    include_once ('config.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO cliente(usuario, email, senha) VALUES ('$usuario', '$email', '$senha')");
}

?>

<div>
    <div class="subtitle">
    </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mt-3">
                        <form action="insert.php" method="post">
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario</label>
                                <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-Mail</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" name="senha" class="form-control" id="senha">
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Confirme a senha</label>
                                <input type="password" name="csenha" class="form-control" id="csenha">
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submitCad" class="btn btn-primary mt-3"><a href="index.php">Enviar</a></button>
                            </div>

                        </form>
                    </div>

                </div>
                <div class="col"></div>
            </div>
        </div>

</div>