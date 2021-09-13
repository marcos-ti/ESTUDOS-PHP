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
        //funcao gettype($) => retorna o tipo da variavel
        $valor = 10.59;
        //$valor2 = (double) $valor;
        //$valor3 = (string) $valor;
        $valor5 = (bool) $valor; // int ou integer
        echo $valor.' '. gettype($valor);
        echo "<br>";
        //echo $valor4.' '. gettype($valor4);
        echo $valor5.' '. gettype($valor5); // bool ou boolean
        
    ?>
</body>
</html>