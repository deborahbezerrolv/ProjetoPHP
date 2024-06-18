<?php

 if(isset($_POST['submitCad'])){

    include_once ('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verificar se o usuário já existe no banco de dados
    $check_query = mysqli_query($conexao, "SELECT * FROM cliente WHERE email='$email' OR usuario='$usuario'");
    $count = mysqli_num_rows($check_query);
    
    if ($count > 0) {
        // Usuário já existe, enviar mensagem de erro em JavaScript
        header("Location: pagCad.php");
        echo "<script>
                alert('Este email ou nome de usuário já está cadastrado. Por favor, escolha outros.');
              </script>";
    } else {
        // Usuário não existe, inserir no banco de dados
        $result = mysqli_query($conexao, "INSERT INTO cliente(nome, email, , nick_usuario, senha) VALUES ('$nome', '$email', '$dataNascimento', '$nomeUsuario', '$senha')");

        if ($result) {
            header("Location: pagLogin.php");
            echo "<script>alert('Cadastro realizado com sucesso!')</script>";
        } else {
            echo "<script>alert('Ocorreu um erro ao cadastrar. Por favor, tente novamente.')</script>";
        }
    }
}