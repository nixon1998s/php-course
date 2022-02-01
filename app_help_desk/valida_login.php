<?php

    session_start();

    #Variável que verifica se a autenticação foi realizada
    $usuario_autenticacao = false;


    #Usuários do sistema
    $usuarios_app = [
        ['email' => 'nixonsilva19@gmail.com', 'senha' => '123456'],
        ['email' => 'adm@master.com', 'senha' => 'admin']
    ];

    foreach($usuarios_app as $user) {
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticacao = true;
        }
    }
    if($usuario_autenticacao) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['x'] = 'um valor';
        $_SESSION['y'] = 'outro valor';
        header('location: home.php');
    } else {
        header('location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NÃO';
    }

?>