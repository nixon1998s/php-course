<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade 2</title>
    </head>
    <body>
        
        <?php 
        
            function calcularImpostoRenda($salario) {

                $imposto = 0;

                if($salario <= 1903.98) {
                    $imposto = 'Isento';
                } else if ($salario >= 1903.99 && $salario <= 2826.65){
                    $imposto = ($salario*7.5/100);
                } else if($salario >= 2826.66 && $salario <= 3751.05) {
                    $imposto = ($salario*15/100);
                } else if($salario >= 3751.06 && $salario <= 4664.68) {
                    $imposto = ($salario*22.5/100);
                } else {
                    $imposto = ($salario*27.5/100);    
                }

                return $imposto;
            }

            echo calcularImpostoRenda(1350);
        ?>

    </body>
</html>