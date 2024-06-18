<?php

session_start();

    if(isset($_POST['submitLogin']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){
        include_once ('config.php');

        $senha = $_POST['senha'];
        $usuario = $_POST['usuario'];

        $sql = "SELECT * FROM cliente WHERE usuario = '$usuario' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) <1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);

            header('Location: pagLogin.php');

        }else{
            $_SESSION['senha'] = $senha;
            $_SESSION['usuario'] = $usuario;
            
            header('Location: pagHome.php');

        }

    }else{
        header('Location: pagLogin.php');
    }

?>