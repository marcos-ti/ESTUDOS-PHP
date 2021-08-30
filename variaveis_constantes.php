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
        //define(), para criar variaveis constantes
        define('DB_URL', 'endereco_db_dev');
        define('DB_USUARIO', 'usuario_dev');
        define('DB_SENHA', 'senha_dev');
        //define('DB_URL', 'endereco_db_dev_2'); gera erro
        // variaveis constantes nao usam $
        echo DB_URL.'<br>';
        echo DB_USUARIO.'<br>';
        echo DB_SENHA;
    ?>
</body>
</html>