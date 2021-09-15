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
    /*
        //Arrays Sequenciais (Numericos)
        //$lista_frutas = array('banana','maça','uva','pera', 12);
        $lista_frutas = ['banana','maça','uva','pera', 12];
        $lista_frutas[] = 'abacate';

        // echo '<pre>';
        //     var_dump($lista_frutas);
        // echo '<hr>';
        // print_r($lista_frutas);
        // echo '</pre>';
        echo '<pre>';
        echo $lista_frutas[0];
        echo '<hr>';
        var_dump ($lista_frutas[0]);
        echo '</pre>';
    */
    // Arrays Associativos
    $lista_frutas = [
        'a' =>'banana',
        'b' =>'maçã',
        'c' =>'uva',
        'd' =>'pêra'
    ];
    // $lista_frutas = array(
    //     'a' =>'banana',
    //     'b' =>'maçã',
    //     'c' =>'uva',
    //     'd' =>'pêra'
    // );
    echo '<pre>';
    var_dump ($lista_frutas);
    echo '<hr>';
    var_dump ($lista_frutas['d']);
    echo '<hr>';
    $lista_frutas['w'] = 'melancia';
    var_dump ($lista_frutas['w']);
    echo '<hr>';
    var_dump ($lista_frutas);
    echo '</pre>';

    ?>
</body>
</html>