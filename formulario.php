<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $documento = $_POST["documento"];
    $animal = $_POST["animal"];
    $especie = $_POST["especie"];
    $idade = $_POST["idade"];
    $alergia = $_POST["alergia"];
    $cirurgia = $_POST["cirurgia"];
    $telefone = $_POST["telefone"];
    $data = $_POST["data"];
    $horario = $_POST["horario"];
    
    echo "<h2>Confirmação de Agendamento</h2>";
    echo "<p>Nome do Dono: $nome</p>";
    echo "<p>Documento: $documento</p>";
    echo "<p>Nome do Animal: $animal</p>";
    echo "<p>Espécie do Animal: $especie</p>";
    echo "<p>Idade do Animal: $idade</p>";
    echo "<p>Alergia a algum remedio? $alergia</p>";
    echo "<p>Cirurgia nos ultimos tres anos? $cirurgia</p>";
    echo "<p>Telefone: $telefone</p>";
    echo "<p>Data da Consulta: $data</p>";
    echo "<p>Horário da Consulta: $horario</p>";
} else {

    header("Location: index.php");
    exit();
}
?>