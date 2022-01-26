<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Foreach</title>
    </head>
    <body>
        
        <?php 
        
            $lista_itens = ['TV', 'Notebook', 'Smartphone', 'Computador'];
            echo '<pre>';
                print_r ($lista_itens);
            echo '</pre>';

            foreach($lista_itens as $pega_valor_indicie) {
                
                echo $pega_valor_indicie;


                if($pega_valor_indicie == 'Smartphone') {
                    echo ' Xiaomi Mi A3';
                }

                echo '<br/>';
            }
        
        ?>

</body>
</html>