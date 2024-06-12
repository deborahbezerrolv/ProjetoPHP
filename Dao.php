<?php
class Dao {
    private $dsn = "mysql:host=localhost;dbname=veterinario";
    private $username = "root";
    private $password = ""; // Adicionado um espaço entre private e password
    private $pdo;

    public function __construct(){
        try {
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);
            // Configurar para lançar exceções em caso de erro
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $ex){
            // Tratamento de erro na conexão com o banco de dados
            echo "Erro na conexão com o banco de dados: " . $ex->getMessage();
            // Interromper a execução do código, se a conexão falhar
            exit();
        }
    }

    public function insertLogin($usuario, $email, $senha){
        try {
            // Usar prepared statements para evitar SQL Injection
            $stmt = $this->pdo->query("INSERT INTO cliente VALUES (null, ?, ?, ?)");
            $stmt->execute([$usuario, $email, $senha]);
            if($stmt->fetch()){
                header("Location: conteudo.php");
                exit(); // Terminar o script após o redirecionamento
            } else { 
                header("Location: cadastro.php");
                exit(); // Terminar o script após o redirecionamento
            }
        } catch(PDOException $ex){
            // Tratamento de erro durante a inserção
            echo "Erro durante a inserção: " . $ex->getMessage();
        }
    }

    public function listar(){
        try {
            $stmt = $this->pdo->query("SELECT * FROM cliente");
            return $stmt;
        } catch(PDOException $ex){
            // Tratamento de erro na consulta SQL
            echo "Erro na consulta: " . $ex->getMessage();
        }
    }

    public function exibirUsuario($id){
        $stmt = $this->pdo->query("select * from cliente");
            return $stmt;
    }

    public function verificaLogin($usuario, $senha){
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM cliente WHERE usuario = ? AND senha = ?");
            $stmt->execute([$usuario, $senha]);
            if($stmt->fetch()){
                header("Location: conteudo.php");
                exit(); // Terminar o script após o redirecionamento
            } else { 
                header("Location: index.php");
                exit(); // Terminar o script após o redirecionamento
            }
        } catch(PDOException $ex){
            // Tratamento de erro na consulta de login
            echo "Erro ao verificar login: " . $ex->getMessage();
        }
    }

    public function verificaCadastro($usuario, $email, $senha){
        try {
            $stmt = $this->pdo->prepare("insert into cliente values (?, ?, ?)");
            $stmt->execute([$usuario, $email, $senha]);
            if($stmt->fetch()){
                header("Location: formLogin.php");
                exit(); // Terminar o script após o redirecionamento
            } else { 
                header("Location: cadastro.php");
                exit(); // Terminar o script após o redirecionamento
            }
        } catch(PDOException $ex){
            // Tratamento de erro na consulta de login
            echo "Erro ao cadastrar usuario: " . $ex->getMessage();
        }
    }

    public function cadastroUsuario($usuario, $email, $senha){
        try {
            $stmt = $this->pdo->prepare("insert into cliente values (null, $usuario, $email, $senha)");
            $stmt->execute([$usuario, $email, $senha]);
            if($stmt->fetch()){
                header("Location: conteudo.php");
                exit(); // Terminar o script após o redirecionamento
            } else { 
                header("Location: index.php");
                exit(); // Terminar o script após o redirecionamento
            }
        } catch(PDOException $ex){
            // Tratamento de erro na consulta de login
            echo "Usuario ou email ja cadastrados: " . $ex->getMessage();
        }
    }
}















