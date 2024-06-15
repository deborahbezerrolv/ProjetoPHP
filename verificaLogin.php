<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos usuário e senha foram preenchidos
    if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
        // Conexão com o banco de dados (substitua com suas credenciais)
        $conexao = new mysqli("localhost", "root", "", "grupo01php");

        // Verifica a conexão
        if ($conexao->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
        }

        // Prepara a declaração SQL para evitar injeção de SQL
        $sql = "SELECT * FROM cliente WHERE usuario = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $_POST['usuario']);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verifica se o usuário existe
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // Verifica se a senha está correta
            if ($_POST['senha'] == $row['senha']) { // Comparação simples da senha
                // Senha correta, cria a sessão de login
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['email'] = $row['email'];
                // Redireciona para a página de home ou dashboard, por exemplo
                header('Location: pagHome.php');
                exit();
            } else {
                // Senha incorreta
                $_SESSION['mensagem'] = "Senha incorreta.";
                header('Location: index.php');
                exit();
            }
        } else {
            // Usuário não encontrado
            $_SESSION['mensagem'] = "Usuário não encontrado.";
            header('Location: index.php');
            exit();
        }

        // Fecha a conexão com o banco de dados
        $conexao->close();
    } else {
        // Campos não preenchidos
        $_SESSION['mensagem'] = "Por favor, preencha todos os campos.";
        header('Location: index.php');
        exit();
    }
}
