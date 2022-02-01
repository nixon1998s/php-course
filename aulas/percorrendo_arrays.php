<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Percorrendo arrays</title>
    </head>
    <body>
        
        <?php 
        
            $registro = [
                ['titulo' => 'Título notícia 1', 'conteudo' => 'conteudo notícia 1'],
                ['titulo' => 'Título notícia 2', 'conteudo' => 'conteudo notícia 2'],
                ['titulo' => 'Título notícia 3', 'conteudo' => 'conteudo notícia 3'],
                ['titulo' => 'Título notícia 4', 'conteudo' => 'conteudo notícia 4']
            ];

            echo '<pre>';
                print_r($registro);
            echo '<pre/>';


            
            $indiceX = 0;

            echo 'O array posssui ' .count($registro). 'registros.';
            echo '<br/>';
            while($indiceX < count($registro)) {

                print_r( '<h3>' .$registro[$indiceX]['titulo']. '</h3>');
                print_r( '<p>' . $registro[$indiceX]['conteudo']. '</p>');
                echo '<hr>';

                $indiceX++;
            }
            
        
        ?>

    </body>
</html>