<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
<?php
    include '../../LOGIN/php/conexao.php';
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $nome = $_POST['namepet'];
        $idade = $_POST['agepet'];
        $peso = $_POST['pesopet'];
        $contato = $_POST['contato'];
        $sexo = $_POST['sexo'];
        $imagem = $_POST['imagem'];
        
        $sql = "INSERT INTO pets (nome, idade, peso, contato, sexo, imagem) VALUES ('$nome', '$idade', '$peso', '$contato', '$sexo', '$imagem')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Registro inserido com sucesso";
        } else {
            echo "Erro ao inserir registro: " . $conn->error;
        }
    }

    $conn->close();
?>
</body>
</html>