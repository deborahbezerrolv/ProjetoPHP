<?php 

require_once "Dao.php";
$dao = new Dao();
$dao->insertLogin($_POST['usuario'],$_POST['email'], $_POST['senha']);