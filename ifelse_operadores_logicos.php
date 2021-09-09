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
        //operadores condicionais ou de comparacao
        //==
        //===
        //!= ou <>
        //!==
        //<
        //>
        //<=
        //>=

        // if(1 == 2 && 10 > 2){
        //     echo 'verdadeiro';
        // } else {
        //     echo 'falso';
        // }

        // if(1 == 2 XOR 10 > 2){
        //     echo 'verdadeiro';
        // } else {
        //     echo 'falso';
        // }

        // if(!(1 == 2)){
        //     echo 'verdadeiro';
        // } else {
        //     echo 'falso';
        // }

        //() precedencia

        if((1 == 2 || 1 == 1) || 2 == 3) {
            echo 'verdadeiro';
        } else {
            echo 'falso';
        }

    ?>
</body>
</html>