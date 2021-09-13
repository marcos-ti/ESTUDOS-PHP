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
    //funcao sem retorno
    function ola( ){
        echo "Olá mundo!<br>";
    }
    ola();
    
    //funcao com retorno
        function soma($n1, $n2) {
            $somar = $n1 + $n2;
            return $somar;
        }
        $resultado = soma(4,5);
        echo $resultado;
        echo '<br>';
        $resultado = soma(10,5);
        echo $resultado;

        
    ?>
</body>
</html>