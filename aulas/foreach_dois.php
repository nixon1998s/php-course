<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Foreach Associativo e encadeado</title>
    </head>
    <body>

        <?php 
        
            $funcionarios = [
               ['nome' => 'Luis Felipe', 'salario' => 2500],
               ['nome' => 'Igor Natanael', 'salario' => 1700],
               ['nome' => 'Nixon Gonçalves', 'salario' => 1350]
            ];

            echo '<pre>';
                print_r($funcionarios);
            echo '<pre>';

            foreach($funcionarios as $indice => $funcionario) {


                foreach($funcionario as $sub_indice => $dados_funcionario) {
                    echo "$sub_indice - $dados_funcionario <br/>";
                }
                echo '<hr>';
            }

             print_r(array_keys($funcionarios));

        ?>
        
    </body>
</html>