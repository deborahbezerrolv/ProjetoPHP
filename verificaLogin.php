<?php 

session_start();

    if(isset($_POST['submit']) && !empty($_POST['usuarioLogin']) && !empty($_POST['emailLogin'])){
        include_once ('config.php');

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario WHERE email = '$usuario' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) <1){
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);

            header('Location: index.php');

        }else{
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            
            header('Location: home.php');

        }

    }else{
        header('Location: index.php');
    }

