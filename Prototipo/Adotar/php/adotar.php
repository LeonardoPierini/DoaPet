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
                $sql = "SELECT id, nome, peso, idade, sexo, imagem, contato FROM pets";
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
        h1{
            text-align: center;
            background-color:#3085FC;
            color: white;
            text-transform: uppercase;
            padding: 20px;
            text-shadow: 1px 1px 2px black;
        }
        .container{
            max-width: 80%;
        }
        .animal-doacao{
            width: 20%;
            background-color: #EA45B0;
            border-radius: 30px;
            display: inline-block;
            margin: 40px  30px;
            text-align: center;
        }
        .animal-doacao img{
           width: 200px;
           margin: 15px 0px;
           border-radius: 25px 25px 0 0;
           height: 200px;
           object-fit: cover;
        }
        .animal-doacao p{
           color: white;
           margin: 10px 20px;
           font-weight: 900;
           text-align: left;
        }
        strong{
            color: black;
        }
        .final{
            margin-bottom: 25px;
        }
        .animal-doacao h2{
           color: white;
           text-align: center;
           margin: 10px 0;
           text-shadow: 1px 1px 1px black;
           text-transform: uppercase;
        }
    </style>
</head>
<body>
    <h1>PET'S DISPONIVEIS</h1>
    <?php
if ($result->num_rows > 0) {
    // Defina um array de caminhos de imagens
    $imagens = [
        '../Img/dog-1.jpg',
        '../Img/salsicha.jpg',
        '../Img/treme-treme.jpg',
        '../Img/coelho-1.jpg',
        '../Img/cat=1.jpg',
        '../Img/dog-2.jpg',
        '../Img/cat-2.jpg',
        '../Img/caramelo.jpg',
        '../Img/dog-3.jpg',
        '../Img/cat-3.jpg',
        
    ];

    // Índice para alternar entre as imagens
    $indice_imagem = 0;

    echo "<div class='container'>";
    while($row = $result->fetch_assoc()) {
        // Use a imagem do array
        $imagem_exibida = $imagens[$indice_imagem];

        // Incrementa o índice para a próxima imagem
        $indice_imagem++;

        // Reinicia o índice se atingir o fim do array de imagens
        if ($indice_imagem >= count($imagens)) {
            $indice_imagem = 0;
        }

        echo "<div class='animal-doacao'>
                <img src='".$imagem_exibida."'>
                <h2>" . htmlspecialchars($row['nome']) . "</h2>
                <p>PESO:  <strong>" . htmlspecialchars($row['peso']) . " kg</strong></p>
                <p>IDADE:   <strong>" . htmlspecialchars($row['idade']) . " anos</strong></p>
                <p>SEXO:   <strong>" . htmlspecialchars($row['sexo']) . "</strong></p>
                <p class='final'>CONTATO:  <strong>" . htmlspecialchars($row['contato']) . "</strong></p>
            </div>";
    }
    echo "</div>";
} else {
    echo "<p>Nenhum animal encontrado</p>";
}

$conn->close();
?>


</body>
</html>
