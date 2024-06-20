<?php
    
     // $dbHost = '192.168.8.10';
     // $dbUsuario = 'grupophp01';
     // $dbSenha = 'php01';
     // $dbNome = 'grupo01php';

     $dbHost = 'localhost';
     $dbUsuario = 'root';
     $dbSenha = '';
     $dbNome = 'grupo01php';

    $conexao = new mysqli($dbHost, $dbUsuario, $dbSenha, $dbNome);