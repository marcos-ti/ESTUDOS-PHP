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
        $num = 1.987;
        $rand1 = 1;
        $rand2 = 10;

        echo ceil($num);
        echo "<br>";
        echo floor($num);
        echo "<br>";
        echo round($num);
        echo "<br>";
       // echo rand()
        echo rand($rand1, $rand2);
        echo "<br>" .getrandmax();
        echo "<br>";
        echo sqrt($rand2);
        echo "<br>";
    ?>
</body>
</html>