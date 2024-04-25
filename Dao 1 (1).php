<?php
class Dao {

private $dsn = "mysql:host=localhost;dbname=exemplo";
private $username = "root";
private$password = "";
private $pdo;

public function __construct(){
    $this->pdo = new PDO($this->dsn, $this->username, $this->password);
}

public function insertLogin($usuario,$senha){
    try {
        $stmt = $this->pdo->query("insert into login values (null,'$usuario','$senha')");
       } catch(PDOException $ex){
           echo "<pre>";
         echo $this->pdo->errorInfo()[2];
       }
}

public function listar(){
    $stmt = $this->pdo->query("SELECT * FROM login");
    return $stmt;
    
}

public function verificaLogin($usuario,$senha){
    $stmt = $this->pdo->query("Select * from login where usuario='$usuario' and senha='$senha'");
    if($stmt->fetch()){
        header("Location: painel.php");
    } else { 
        header("Location: index.php");
    }
}
}














