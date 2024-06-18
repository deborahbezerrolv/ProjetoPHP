<?php
// Inicia a sessão antes de qualquer saída
session_start();

// Verifica se o cliente está logado (você deve ter um mecanismo de login que define $_SESSION['usuario_cliente'])
if (!isset($_SESSION['usuario_cliente'])) {
    echo "Cliente não está logado.";
    exit; // ou redirecione para a página de login
}

// Conexão com o banco de dados (substitua com suas credenciais)
$conexao = new mysqli("localhost", "root", "", "grupo01php");

// Verifica a conexão
if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

// Prepara a consulta SQL para buscar as consultas do cliente pelo ID do cliente
$sql_consultas = "SELECT id_consulta, cpf, nome_animal, especie, idade, alergia, cirurgia, tel, data_cons, horario FROM consulta WHERE usuario_cliente = ?";
$stmt = $conexao->prepare($sql_consultas);
$stmt->bind_param("s", $_SESSION['usuario_cliente']); // Use "s" para string
$stmt->execute();
$result_consultas = $stmt->get_result();

// Verifica se há consultas encontradas
if ($result_consultas->num_rows > 0) {
    // Exibe as consultas encontradas
    while ($row = $result_consultas->fetch_assoc()) {
        echo "Consulta ID: " . $row['id_consulta'] . "<br>";
        echo "CPF: " . $row['cpf'] . "<br>";
        echo "Nome do Animal: " . $row['nome_animal'] . "<br>";
        echo "Espécie: " . $row['especie'] . "<br>";
        echo "Idade: " . $row['idade'] . "<br>";
        echo "Alergia: " . ($row['alergia'] ? 'Sim' : 'Não') . "<br>";
        echo "Cirurgia: " . ($row['cirurgia'] ? 'Sim' : 'Não') . "<br>";
        echo "Telefone: " . $row['tel'] . "<br>";
        echo "Data da Consulta: " . $row['data_cons'] . "<br>";
        echo "Horário: " . $row['horario'] . "<br>";
        echo "<hr>";
    }
} else {
    echo "Não há consultas agendadas para este cliente.";
}

// Fecha a conexão com o banco de dados
//$conexao->close();

