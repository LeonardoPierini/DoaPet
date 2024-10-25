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

        // Verifica se a imagem foi enviada corretamente
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == UPLOAD_ERR_OK) {
            // Verifica o tamanho do arquivo (exemplo: 2MB de limite)
            if ($_FILES['imagem']['size'] <= 2097152) {
                // Lê o conteúdo da imagem e prepara para salvar no banco
                $imagem = file_get_contents($_FILES['imagem']['tmp_name']);

                // Prepara a query para inserir os dados, incluindo a imagem (usando prepared statements para evitar SQL Injection)
                $stmt = $conn->prepare("INSERT INTO pets (nome, idade, peso, contato, sexo, imagem) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssssb", $nome, $idade, $peso, $contato, $sexo, $imagem);

                if ($stmt->execute()) {
                    echo "Registro inserido com sucesso";
                } else {
                    echo "Erro ao inserir registro: " . $conn->error;
                }
            } else {
                echo "Erro: Tamanho do arquivo excede o limite permitido.";
            }
        } else {
            echo "Erro: Nenhuma imagem foi enviada ou houve um erro no upload.";
        }
    }

    $conn->close();
?>

</body>
</html>