<?php
    require 'config.php';
    require 'models/UsuarioDaoMysql.php';

    $usuarioDao = new UsuarioDaoMysql($pdo);

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha');

    if($email && $senha) {
        
        if ($usuarioDao->autheticationLogin($email, $senha) === true) {
            header("Location: principal.php");
            exit;
        } else {
            header("Location: adicionar_usuario.php");
            exit;
        }
    } else {
        header("Location: adicionar_usuario.php");
        exit;
    }