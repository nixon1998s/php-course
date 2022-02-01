<?php
    session_start();
    /*
    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';

    #unset(array, indice) remove índices do array de sessão, serve para remover índices de qualquer array.

    unset($_SESSION['x']);
    
    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';

    #session_destroy() destroe a variável de sessão
    */
    session_destroy();
    header('location: index.php');

?>