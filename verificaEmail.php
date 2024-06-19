<?php

session_start();

if (isset($_POST['submitEmail']) && !empty($_POST['email_cliente'])) {
    include_once ('config.php');

    $email_cliente = $_POST['email_cliente'];


    if ($conexao->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
    }

    $sql_consultas = "SELECT * FROM consulta WHERE email_cliente = '$email_cliente'";
    $stmt_consultas = $conexao->prepare($sql_consultas);
    $stmt_consultas->bind_param("s", $email_cliente);
    $stmt_consultas->execute();
    $result_consultas = $stmt_consultas->get_result();

 
    if ($result_consultas->num_rows > 0) {
        // echo "<h2>Consultas encontradas para o email $email_cliente:</h2>";
        // echo "<ul>";
        // while ($row = $result_consultas->fetch_assoc()) {
        //     echo "<li>Data da Consulta: {$row['data_cons']}, Horário: {$row['horario']}</li>";
        }  
        echo "</ul>";

} else {
        echo "<p>Nenhuma consulta encontrada para o email $email_cliente.</p>";
    }


