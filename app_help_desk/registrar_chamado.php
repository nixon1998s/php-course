<?php 

    echo '<pre>';
        print_r($_POST);
    echo '</pre>';

    #Modelando o texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);


    $texto = $titulo . "#" . $categoria . "#" . $descricao . PHP_EOL;

    #Abrindo o arquivo
    $arquivo = fopen('arquivo.txt', 'a');

    #Escrevendo o texto
    fwrite($arquivo, $texto);

    #Fechando o arquivo
    fclose($arquivo);

    header('location: abrir_chamado.php');

?>