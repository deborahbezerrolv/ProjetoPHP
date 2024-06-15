<?php


session_start();
// Verifica se há uma mensagem de erro
if(isset($_SESSION['error_message'])) {
    echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error_message'] . '</div>';
    unset($_SESSION['error_message']); // Limpa a mensagem de erro após exibi-la
}


require_once "cabecalho.php";
include "pagLogin.php";
require_once "rodape.php";