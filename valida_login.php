<?php

    session_start();
    //echo $_POST['email'];
    //echo $_POST['senha'];
    $_SESSION['logado'] = false;
    $password_error = false;

    $logins = array(
        array('id' => 1, 'email' => "larissa@mural.com", 'senha' => "1234", 'acesso' => 1),
        array('id' => 2, 'email' => "carlos@mural.com", 'senha' => "1234", 'acesso' => 2),
        array('id' => 3, 'email' => "georgina@mural.com", 'senha' => "1234", 'acesso' => 2),
        array('id' => 4, 'email' => "maria@mural.com", 'senha' => "1234", 'acesso' => 2),
        array('id' => 5, 'email' => "murialdo@mural.com", 'senha' => "1234", 'acesso' => 3),
        array('id' => 6, 'email' => "matheus@mural.com", 'senha' => "1234", 'acesso' => 3),
        array('id' => 7, 'email' => "carlos@mural.com", 'senha' => "1234", 'acesso' => 3),
        array('id' => 8, 'email' => "manuela@mural.com", 'senha' => "1234", 'acesso' => 3)
    );

    foreach($logins as $login) { 

        if($login['email'] == $_POST['email']) { 
            echo 'check email <br/>';
            
            if($login['senha'] == $_POST['senha']) { 
                echo 'senha check<br/>';
                $_SESSION['logado'] = true;
                $_SESSION['login_acesso'] = $login['acesso'];
                $_SESSION['login_email'] = $login['email'];
            } else {
                $password_error = true;
            }
        } 
    }

    if($_SESSION['logado'] == true)  {
        header('Location: mural.php');
    } elseif($password_error == true) { 
        header('Location: login.php?login=erroSenha');
    } else { 
        header('Location: login.php?login=erroEmail');
    }



    /*
    LOGINS: 
    email / senha / acesso
    larissa@mural.com - 1234 - CEO
    CEO - pode ler tudo, pode criar avisos, pode dar ok em todos os avisos, pode deletar todos os avisos

    elisangela@mural.com - 1234 - Supervisora Suporte técnico
    maria@mural.com - 1234 - Supervisora Desenvolvimento 
    carlos@mural.com - 1234 - Supervisor ADM 
    georgina@mural.com - 1234 - Supervisora RH 
    Supervisores - podem ler apenas avisos direcionados ao departamento deles, podem ler os avisos que eles criaram, podem dar ok nos avisos destinados a eles, podem deletar os avisos que criaram 

    murialdo@mural.com - 1234 - Suporte técnico 
    matheus@mural.com - 1234 - Desenvolvimento
    carlos@gmail.com - 1234 - ADM 
    manuela@gmail.com - 1234 - RH 
    Membros ordinarios - podem apenas ler os avisos que foram enviados para a sua área
    
    ACESSOS: 
    1 - CEO 
    2 - SUPERVISORES
    3 - ORDINARIOS
    */




?>
