<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
  
    <?php
        //string
        $nome = 'Marcos Faria';
        //int
        $idade = 43;
        //float
        $peso = 95.5;
        //boolean
        $fumante_sn = false; //(true = 1) ou (false = vazio)
        // modificando valores
        $idade = 44;
        //modificando a tipagem
        $idade = '44';
    ?>
        <h1>Ficha cadastral</h1>
        <br>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?= $fumante_sn ?></p>

    

</body>
</html>