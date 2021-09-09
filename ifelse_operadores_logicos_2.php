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
        // Usuario com cartao e compra > 100, frete gratis
        $usu_cart_loja = true;
        $valor_compra = 100;
        $valor_frete = 30;
        $recebeu_desconto_frete = false;

        if($usu_cart_loja && $valor_compra >= 100){
            $valor_frete = 0;
            $recebeu_desconto_frete = true;
        }
    ?>

    <h1>Detalhes do Pedido:</h1>

    <p>Possui cartão da loja?
        <?php 
                if($usu_cart_loja){
                    echo "Sim";
                } else {
                    echo "Não";
                }
            ?>
    </p>
    <p> Valor da compra:
        <?= $valor_compra ?>
    </p>

    <p>Recebeu desconto no frete?
        <?php 
                if($recebeu_desconto_frete){
                    echo "Sim";
                } else {
                    echo "Não";
                }
            ?>
    </p>

    <p> Valor do frete:
        <?= $valor_frete ?>
    </p>

</body>

</html>