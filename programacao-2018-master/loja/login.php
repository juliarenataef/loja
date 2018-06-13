<?php

    session_start();

    if ($_GET['acao'] == 'login'){
        if ($_POST['nome'] == 'admin' and $_POST['senha'] == '12345'){
            $_SESSION['esta_logado'] = true;
            $_SESSION['nome'] = 'admin';

            header('Location: index.php');

        } else {
            echo '<h1>Dados incorretos</h1> <br> <a href="index.php">Inicio</a>';
        }
    } elseif ($_GET['acao'] == 'logout'){
        session_destroy();

        header('Location: index.php');
    }

