<?php

session_start();

if (isset($_POST['submitEmail']) && !empty($_POST['email_cliente'])) {
    include_once('config.php'); // Verifique se config.php contém a definição de $conexao

    $email_cliente = $_POST['email_cliente'];

    // Preparar a consulta usando uma consulta preparada
    $sql_consultas = "SELECT * FROM consulta WHERE email_cliente = ?";
    $stmt_consultas = $conexao->prepare($sql_consultas);

    if ($stmt_consultas === false) {
        die('Erro na preparação da consulta: ' . $conexao->error);
    }

    // Vincular parâmetros
    $stmt_consultas->bind_param("s", $email_cliente);

    // Executar a consulta
    $stmt_consultas->execute();

    // Obter resultados
    $result_consultas = $stmt_consultas->get_result();

    // Verificar se foram encontradas consultas
    if ($result_consultas->num_rows > 0) {
        echo "<h2>Consultas encontradas para o email $email_cliente:</h2>";
        echo "<ul>";
        while ($row = $result_consultas->fetch_assoc()) {
            echo "<li>Data da Consulta: {$row['data_cons']}, Horário: {$row['horario']}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhuma consulta encontrada para o email $email_cliente.</p>";
    }

    // Fechar a consulta
    $stmt_consultas->close();
}


