<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos foram preenchidos
    if (isset($_POST['usuario']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
        // Conexão com o banco de dados (substitua com suas credenciais)
        $conexao = new mysqli("localhost", "root", "", "grupo01php");

        // Verifica a conexão
        if ($conexao->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
        }

        // Prepara a declaração SQL para evitar injeção de SQL
        $sql = "SELECT * FROM cliente WHERE usuario = ? OR email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $_POST['usuario'], $_POST['email']);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verifica se já existe um usuário ou email cadastrado
        if ($result->num_rows > 0) {
            $_SESSION['mensagem'] = "Usuário ou email já cadastrado.";
            header('Location: pagCad.php');
            exit();
        } else {
            // Insere o novo usuário no banco de dados
            $sql_insert = "INSERT INTO cliente (nome, usuario, email, senha) VALUES (?, ?, ?, ?)";
            $stmt_insert = $conexao->prepare($sql_insert);

            // Não vamos usar hash para a senha
            $senha = $_POST['senha'];

            $stmt_insert->bind_param("ssss", $_POST['nome'], $_POST['usuario'], $_POST['email'], $senha);
            if ($stmt_insert->execute()) {
                $_SESSION['mensagem'] = "Cadastro realizado com sucesso.";
                header('Location: index.php');
                exit();
            } else {
                $_SESSION['mensagem'] = "Erro ao cadastrar usuário: " . $conexao->error;
                header('Location: pagCad.php');
                exit();
            }
        }

        // Fecha a conexão com o banco de dados
        $conexao->close();
    } else {
        $_SESSION['mensagem'] = "Por favor, preencha todos os campos.";
        header('Location: pagCad.php');
        exit();
    }
}
