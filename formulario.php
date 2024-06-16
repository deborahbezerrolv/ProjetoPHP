<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $nome_animal = $_POST["nome_animal"];
    $especie = $_POST["especie"];
    $idade = $_POST["idade"];
    $alergia = $_POST["alergia"];
    $cirurgia = $_POST["cirurgia"];
    $tel = $_POST["tel"];
    $data_cons = $_POST["data_cons"];
    $horario = $_POST["horario"];
    
    echo "<h2>Confirmação de Agendamento</h2>";
    echo "<p>Nome do Dono: $nome</p>";
    echo "<p>cpf: $cpf</p>";
    echo "<p>Nome do Animal: $nome_animal</p>";
    echo "<p>Espécie do Animal: $especie</p>";
    echo "<p>Idade do Animal: $idade</p>";
    echo "<p>Alergia a algum remedio? $alergia</p>";
    echo "<p>Cirurgia nos ultimos tres anos? $cirurgia</p>";
    echo "<p>Telefone: $tel</p>";
    echo "<p>Data da Consulta: $data_cons</p>";
    echo "<p>Horário da Consulta: $horario</p>";
} else {

    header("Location: index.php");
    exit();
}
?>