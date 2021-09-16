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
        $lista_coisas = [];
        $lista_coisas['frutas'] = [1 => 'banana', 2 =>  'maça', 3 => 'morango', 4 => 'uva'];
        $lista_coisas['pessoas'] = [1 => 'joao', 2 =>  'maria', 3 => 'joana', 4 => 'mario'];
        echo '<pre>';
            var_dump($lista_coisas['frutas']);
            echo'<br>';
            var_dump($lista_coisas['pessoas']);
            echo'<br>';
            var_dump($lista_coisas['pessoas'][3]);

        echo '</pre>';

    ?>
</body>
</html>