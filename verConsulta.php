<?php
session_start();


if (!isset($_SESSION['usuario_cliente'])) {
    echo "Cliente não está logado.";
    exit;
}


$conexao = new mysqli("localhost", "root", "", "grupo01php");


if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

$sql_consultas = "SELECT id_consulta, cpf, nome_animal, especie, idade, alergia, cirurgia, tel, data_cons, horario FROM consulta WHERE usuario_cliente = ?";
$stmt = $conexao->prepare($sql_consultas);
$stmt->bind_param("s", $_SESSION['usuario_cliente']);
$stmt->execute();
$result_consultas = $stmt->get_result();


if ($result_consultas->num_rows > 0) {
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
