<?php 

    session_start();

    $titulo = $_POST['titulo-aviso'];
    $destino = $_POST['destino-aviso'];
    $texto = $_POST['texto-aviso'];
    $autor = $_SESSION['login_email'];

    $conteudoAviso = $titulo . ' -/- '. $destino . ' -/- '. $texto . ' -/- '. $autor . PHP_EOL;

    //TRATAR OS VALORES, se forem null, vou lançar um erro 

    echo $conteudoAviso;

    $banco = fopen('bancoDadosTxt.txt', 'a');

    fwrite($banco, $conteudoAviso);

    fclose($banco);

    header('Location: mural.php')

?> 