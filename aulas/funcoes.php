<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funções</title>
    </head>
    <body>
        
        <?php 
        
            #Função sem retorno (VOID)
            function exibirBoasVindas() {
                echo 'Olá, seja bem vindo ao curso de PHP.';
            }

            exibirBoasVindas();

            echo '<br/>';

            #Função com retorno
            function calcularAreaTerreno($largura, $comprimento) {
                return $largura * $comprimento;
            }

            echo calcularAreaTerreno(30, 50);

        ?>

    </body>
</html>