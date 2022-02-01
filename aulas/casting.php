<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Casting de variáveis</title>
    </head>
    <body>
        
        <?php 

            $valor = 10;
            $valor2 = (float) $valor;

            echo gettype($valor);
            echo '<br/>';
            echo gettype($valor2);


        ?>

    </body>
</html>
