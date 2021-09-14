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
        //string to lower - strtolower()
        $texto = "treinamento em PHP";
        echo $texto;
        echo "<br>";
        echo strtolower($texto);
        echo "<br>";
        echo strtoupper($texto);
        echo "<br>";
        echo ucfirst($texto);
        echo "<br>";
        echo strlen($texto);
        echo "<br>";
        echo str_replace('PHP', 'CSS', $texto);
        echo "<br>";
        echo substr($texto, 0, 11);
    ?>
</body>
</html>