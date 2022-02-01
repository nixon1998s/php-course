<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Array</title>
    </head>
    <body>

        <?php 
        
            $lista_frutas = array('Banana', 'Morango', 'Uva', 'Maça');
            $lista_mercado_livre = ['Manivela', 'Roseta', 'Kit de borracha para porta', 'Jogo de Canaleta', '50 grampos de trava forro'];
            $lista_mercado_livre[] = 'Moldura da maçaneta';


            echo '<pre>';
                var_dump($lista_frutas);
            echo '<pre/>';

            echo '<br/>';

            echo '<pre>';
                print_r($lista_mercado_livre);
            echo '<pre/>';    

            echo '<hr>';

            $lista_coisas = [];
            $lista_coisas['ferramentas'] = [ 1 => 'martelo', 2 => 'alicate', 3 => 'chave de fenda'];
            $lista_coisas['epi'] = [ 1 => 'oculos', 2 => 'capacete', 3 => 'luvas'];
            $lista_coisas['epi'][4] = 'botas';
            print_r($lista_coisas);

            echo '<br/>';

            print_r($lista_coisas['epi'][3]);
        ?>
        
    </body>
</html>