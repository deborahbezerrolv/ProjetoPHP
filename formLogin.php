<div class="container">
    <div class="row">
        <div class="col">
            <div class="mt-3">
                <form action="verificaLogin.php" method="post">

                    <div>
                        <h1>Seja bem vindo a Clinica Veterinária Madagascar</h1>
                    </div>

                    <div>
                        <h6>Para agendar uma consulta entre com seu usuário e senha</h6>
                    </div>

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuário:</label>
                        <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="">
                    </div>

                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" name="senha" class="form-control" id="senha">
                    </div>

                    <div>
                        <h6>Se não possui um usuário clique em Registre-se</h6>
                    </div>

                    <div class="text-center">
                        <button name="submitLogin" type="submit" class="btn btn-primary mt-3">Entrar</button>
                        <button type="submit" class="btn btn-primary mt-3" style="background-color: cian; color: white;"><a href="pagCad.php" class="links">Registre-se</a></button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
