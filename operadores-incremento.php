<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
   
<h3>Pós e Pré-incremento</h3>        

    <?php 
        $a = 0;
        echo "O valor contido em $a, é " . $a;
        echo "<br>";
        echo 'O valor contido em ' . $a . ' com incremento após, é ' . $a++ . '';
        echo "<br>";
        echo 'O valor contido em ' . $a . ' com incremento antes, é ' . ++$a . '';
        echo "<br>";
        echo 'O valor contido em ' . $a . ' com decremento antes, é ' . --$a . '';
        echo "<br>";
        echo 'O valor contido em ' . $a . ' com decremento após, é ' . $a-- . '';
        echo "<br>";
        echo 'O valor contido em ' . $a . ' é ' . $a-- . '';
    ?>
</body>
</html>