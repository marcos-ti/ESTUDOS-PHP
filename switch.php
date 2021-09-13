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
    //$parametro = '2';// Php faz Casting de tipo
    //$parametro = 2;
    $parametro = 'abc';
    switch ($parametro) {
        case 1:
            echo "Entrou no case 1";
            break;

        case false:
            echo "Entrou no case false";
            break;

        case 'abc':
            echo "Entrou no case abc";
            break;    
        
        default:
        echo "Entrou no Default";
        break;
    }
?>

</body>

</html>