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
        //recuperacao da data atual - data corrente
        echo date('d/m/Y H:i');
        echo "<br>";
        //timezone
        echo date_default_timezone_get();
        date_default_timezone_set('America/Sao_Paulo');
        echo "<br>";
        echo date('d/m/Y H:i');
    */
        $data_inicial = '2021-09-14';
        $data_final = '2021-11-15';
         //timestamp
         //01/01/1970 -- 2021-09-14

         $time_inicial = strtotime($data_inicial);
         $time_final = strtotime($data_final);

         echo $data_inicial . '-' . $time_inicial;
         echo "<br>";
         echo $data_final . '-' . $time_final;

         $diferenca_times = abs($time_inicial - $time_final);//abs = absoluto (+)
         echo "<br>";
         echo "A diferença de segundos entre $time_final e $time_inicial é: $diferenca_times";
         echo "<br>";
         $segundos_um_dia = 24 * 60 * 60;
         echo "Um dia possui: $segundos_um_dia segundos";
         echo "<br>";
         $qtidade_dias = $diferenca_times / $segundos_um_dia;
         echo "<br>";
         echo "A quantidade de dias é: $qtidade_dias dias.";


    ?>
</body>
</html>