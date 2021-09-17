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
        /**Pesquisa com funções nativas do php
         * in_array(): True or false para a existencia do q se procura
         * array_search(): Retorna o indice da pesquisa caso exista
         */

         $lista_frutas = ['jaca', 'caju', 'uva', 'pequi'];
         $pessoas = ['joao', 'maria', 'vitor', 'lucia'];
         
        //  echo'<pre>';
        //     var_dump($lista_frutas);
        //  echo'</pre>';

        //  //$temFruta = in_array('uva', $lista_frutas);//true = 1, false = vazio
        // $temFruta = array_search('uva', $lista_frutas);//retorno = null
        // echo $temFruta;
        // echo "<br>";
        //  if($temFruta != null){
        //      echo "As frutas que tem são: $lista_frutas[0], $lista_frutas[1], $lista_frutas[2], $lista_frutas[3]";
        //  } else {
        //      echo "Não tem frutas";
        //  }

         //

         $lista_coisas = [
             'frutas' => $lista_frutas,
             'pessoas' => $pessoas
         ];
            echo'<pre>';
                var_dump($lista_coisas);
            echo'</pre>';
            echo '<br>';
            echo in_array('uva', $lista_coisas['frutas']);
    ?>
</body>
</html>