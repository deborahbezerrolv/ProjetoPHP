<?php
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe e sanitiza os dados do formulário
    $id_cliente = $_POST['id_cliente']; // ID do cliente vindo do campo oculto no formulário
    $nome = $_POST['nome']
    $cpf = $_POST['cpf'];
    $nome_animal = $_POST['nome_animal'];
    $especie = $_POST['especie'];
    $idade = $_POST['idade'];
    $alergia = $_POST['alergia'] == '1' ? 1 : 0; // converte para booleano
    $cirurgia = $_POST['cirurgia'] == '1' ? 1 : 0; // converte para booleano
    $tel = $_POST['tel'];
    $data_cons = $_POST['data_cons'];
    $horario = $_POST['horario'];

    // Conexão com o banco de dados (substitua com suas credenciais)
    $conexao = new mysqli("localhost", "root", "", "grupo01php");

    // Verifica a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
    }

    // Prepara a consulta SQL para buscar o ID do cliente pelo usuário
    $sql_cliente = "SELECT id FROM cliente WHERE usuario = ?";
    $stmt_cliente = $conexao->prepare($sql_cliente);
    $stmt_cliente->bind_param("s", $_SESSION['usuario']);
    $stmt_cliente->execute();
    $result_cliente = $stmt_cliente->get_result();

    if ($result_cliente->num_rows > 0) {
        // Obtém o ID do cliente
        $row_cliente = $result_cliente->fetch_assoc();
        $id_cliente = $row_cliente['id'];

        // Prepara a consulta SQL para inserir os dados na tabela 'consulta'
        $sql = "INSERT INTO consulta (id_cliente, cpf, nome_animal, especie, idade, alergia, cirurgia, tel, data_cons, horario) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("iisssiisss", $id_cliente, $cpf, $nome_animal, $especie, $idade, $alergia, $cirurgia, $tel, $data_cons, $horario);

        // Executa a consulta
        if ($stmt->execute()) {
            echo "Consulta agendada com sucesso!";
        } else {
            echo "Erro ao agendar consulta: " . $conexao->error;
        }
    } else {
        echo "Erro: Cliente não encontrado.";
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
}