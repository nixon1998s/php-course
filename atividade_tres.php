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

            while(count($lista_numeros) <= 6) {
                $lista_numeros = rand(1,60);
                echo $lista_numeros;
            }

        ?>
        
    </body>
</html>