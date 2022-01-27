<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade três</title>
    </head>
    <body> 

        <!-- 
            Crie um script capaz de produzir, através de um laço de repetição, um array com 6 elementos númericos
            aleatórios entre 1 e 60, simulando o funcionamento do sorteio da mega sena. Atente-se ao fato de que
            os números aleatórios contidos dentro do array não podem ser repetidos.
        -->
        <?php 
        
            $lista_numeros = [];

            while(count($lista_numeros) <= 5) {
                $numeros = rand(1,60);
                /* Caso o valor não esteja presente, a função in_array retornará false. Precisamos fazer com 
                que esse false passe a se tornar true, para que o código do if seja executado ao invés de um 
                código do else. Para fazer isso, negamos o resultado da função in_array, com uso do operador de negação: !
                Como o retorno agora será true (!false), podemos executar a adição do numero aleatorio dentro do array.
                */
                if(!in_array($numeros, $lista_numeros)) {
                    $lista_numeros[] = $numeros;
                }
            }
            echo '<pre>';
                print_r($lista_numeros);
            echo '<pre>';

        ?>
        
    </body>
</html>