<?php
class Dao {
    private $dsn = "mysql:host=localhost;dbname=exemplo";
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

    public function insertLogin($usuario, $senha){
        try {
            // Usar prepared statements para evitar SQL Injection
            $stmt = $this->pdo->prepare("INSERT INTO login VALUES (null, ?, ?)");
            $stmt->execute([$usuario, $senha]);
        } catch(PDOException $ex){
            // Tratamento de erro durante a inserção
            echo "Erro durante a inserção: " . $ex->getMessage();
        }
    }

    public function listar(){
        try {
            $stmt = $this->pdo->query("SELECT * FROM login");
            return $stmt;
        } catch(PDOException $ex){
            // Tratamento de erro na consulta SQL
            echo "Erro na consulta: " . $ex->getMessage();
        }
    }

    public function exibirUsuario($id){
        $stmt = $this->pdo->query("select * from login");
            return $stmt;
    }

    public function verificaLogin($usuario, $senha){
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM login WHERE usuario = ? AND senha = ?");
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
}














