<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos foram preenchidos
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        // Conexão com o banco de dados (substitua com suas credenciais)
        $conexao = new mysqli("localhost", "root", "", "grupo01php");

        // Verifica a conexão
        if ($conexao->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
        }

        // Prepara a declaração SQL para evitar injeção de SQL
        $sql = "SELECT * FROM cliente WHERE usuario = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $_POST['usuario']);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verifica se o usuário existe
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // Verifica se a senha está correta
            if (isset($_POST['senha'], $row['senha'])) {
                // Senha correta, cria a sessão de login
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['email'] = $row['email'];
                // Redireciona para a página de home ou dashboard, por exemplo
                header('Location: home.php');
                exit();
            } else {
                // Senha incorreta
                echo "Senha incorreta.";
            }
        } else {
            // Usuário não encontrado
            echo "Usuário não encontrado.";
        }

        // Fecha a conexão com o banco de dados
        $conexao->close();
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}



// session_start();

// try {
//     if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){
//         include_once ('config.php');

//         $usuario = $_POST['usuario'];
//         $senha = $_POST['senha'];

//         // Use prepared statements para evitar injeção de SQL
//         $sql = "SELECT * FROM cliente WHERE usuario = ? AND senha = ?";
//         $stmt = $conexao->prepare($sql);
//         $stmt->bind_param("ss", $usuario, $senha);
//         $stmt->execute();
//         $result = $stmt->get_result();

//         if($result->num_rows < 1){
//             unset($_SESSION['usuario']);
//             unset($_SESSION['senha']);
//             // Adicionando mensagem de erro
//             $_SESSION['error_message'] = "Usuário ou senha incorretos.";
//             header('Location: index.php');
//             exit(); // Certifique-se de que o script pare de executar após o redirecionamento
//         }else{
//             $_SESSION['usuario'] = $usuario;
//             $_SESSION['senha'] = $senha;
//             header('Location: home.php');
//             exit(); // Certifique-se de que o script pare de executar após o redirecionamento
//         }
//     }else{
//         // Adicionando mensagem de erro
//         $_SESSION['error_message'] = "Usuário ou senha vazios.";
//         header('Location: index.php');
//         exit(); // Certifique-se de que o script pare de executar após o redirecionamento
//     }
// } catch (Exception $e) {
//     echo "Erro: " . $e->getMessage();
// }
?>
