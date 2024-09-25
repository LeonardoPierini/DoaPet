<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    include '../../LOGIN/php/conexao.php';
   
    
                // Verificando a conexão
                if ($conn->connect_error) {
                    die("Falha na conexão: " . $conn->connect_error);
                }
    
               // Consulta SQL para selecionar os dados
                $sql = "SELECT nome, peso, idade, sexo, imagem, contato FROM pets";
                $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETS DISPONIVEIS</title>
    <style>
    
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 8% 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

    <h1>Informações dos Usuários</h1>

    <table>
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Peso</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>contato</th>
            </tr>
        </thead>
        <tbody>
            <?php

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><img src='" . htmlspecialchars($row['imagem']) . "' alt='Imagem de " . htmlspecialchars($row['nome']) . "'></td>";
                    echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['peso']) . " kg</td>";
                    echo "<td>" . htmlspecialchars($row['idade']) . " anos</td>";
                    echo "<td>" . htmlspecialchars($row['sexo']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['contato']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Nenhum usuário encontrado</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>

</body>
</html>
