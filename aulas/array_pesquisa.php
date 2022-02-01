<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Array pesquisa</title>
    </head>
    <body>
        
        <?php 
        
            $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

            echo '<pre>';
                print_r($lista_frutas);
            echo '</pre>';

            echo in_array('Tomate', $lista_frutas);

            echo array_search('Maçã', $lista_frutas);

        ?>

    </body>
</html>