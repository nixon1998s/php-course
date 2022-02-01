<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operadores condicionais</title>
    </head>
    <body>
        
        <?php
            $idade = 23;
            $peso = 71;

            echo ($idade >=16 && $idade <=69) && $peso >=50 ? 'Atende aos requisitos' : 'Não atende aos requisitos';
            
        ?>

    </body>
</html>