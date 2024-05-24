<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "doapet"; 

    // Criar conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexão
    if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
    }

    echo "Conexão bem-sucedida"; // Exibir mensagem se a conexão for bem-sucedida
?>
