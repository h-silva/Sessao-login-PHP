<?php
    require_once "../persistence/usuariodao.php";

    session_start();
    
    $objetoUsuario = new Usuario();
    $objetoUsuario->setUsuario($_POST['usuario']);
    $objetoUsuario->setSenha($_POST['senha']);

    $usuarioDao = new usuarioDao();
    $have = $usuarioDao->verificarUsuario($objetoUsuario);
   
    if($have == true){    

        $_SESSION['usuario'] = $objetoUsuario->getUsuario();
        $_SESSION['senha'] = $objetoUsuario->getSenha();
        header('location: ../index.php');
        exit();
    }
    else{
        unset ($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('location: ../view/telaLogin.php');
        exit();
    } 
?>