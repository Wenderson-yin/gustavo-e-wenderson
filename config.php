<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbname = 'formulario_horta';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbname); 

    // if($conexao->connect_errno)
    // {
    //     echo "Erro"; 
    // }
    // else{
    //     echo "Conexão estabelecida com sucesso!";
    // }
?>