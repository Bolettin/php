<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px; 
            margin-top: 20px;
        }

        .campo {
            display: flex;
            flex-direction: column; 
            align-items: flex-start; 
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        img {
            max-width: 200px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php include 'cabecalho.php'; ?>
    <?php $imagem = "netflix-catalogo.jpg";?>

    <img src="<?php echo $imagem ?>" alt="">
    
    <form action="index.php" method="POST">
        <div class="campo">
            <label for="nomefilme">Nome do filme:</label>
            <input type="text" id="nomefilme" name="nomefilme">
        </div>

        <div class="campo">
            <label for="genero">Gênero:</label>
            <input type="text" id="genero" name="genero">
        </div>

        <button type="submit">Enviar</button>
    </form>

    <?php
    $nomefilme = $_POST['nomefilme'] ?? "";
    $genero = $_POST['genero'] ?? "";
    ?>
    <p>Filme cadastrado <?php echo $nomefilme . " " . $genero; ?> </p>

    <?php if ($genero == "terror"): ?>
        <p style="color: red;">Atenção! filme de terror cadastrado</p>
    <?php elseif ($genero == "comédia"): ?>
        <p style="color: green;">Esse filme promete boas risadas!</p>
    <?php endif; ?>

    <?php include 'rodape.php'; ?>
</body>

</html>
