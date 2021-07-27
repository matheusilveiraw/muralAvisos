<?php 
 
 /*
 echo $_SESSION['logado'] . '<br>';
 echo $_SESSION['login_acesso'] . '<br>';
 echo $_SESSION['login_email'] . '<br>';
 echo $_SESSION['login_equipe'] . '<br>';
*/

function aviso($titulo, $destino, $conteudo, $quemEnviou) { 

  ?>
  <div class="card mb-3">
    <div class="card-header">
      <?= $titulo ?>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p> <?= $conteudo ?> </p>
        <footer class="blockquote-footer"><?= $quemEnviou  ?></footer>
      </blockquote>
    </div>
  </div>
  <?php

}

function postarMural ($avisos=array(), $visibilidade) { 
  //$avisos_divididos = explode('-/-', $avisos[0]);

  for($i = 0; $i < count($avisos) - 1; $i++) { 

    $info_separada = explode('-/-', $avisos[$i]);
    /*echo $info_separada[0] . '<br>'; titulo
    echo $info_separada[1] . '<br>'; destino
    echo $info_separada[2] . '<br>'; conteudo 
    echo $info_separada[3] . '<br>'; quem mandou
    echo '-------- <br>';*/

    if($visibilidade == 1) { 
      aviso($info_separada[0], $info_separada[1], $info_separada[2], $info_separada[3]);
    }

    /*
    echo $visibilidade . '<br>';
    echo $info_separada[1]  . '<br>';
    */

    if($info_separada[1] == ' Desenvolvimento ' && $visibilidade == 2) {
      aviso($info_separada[0], $info_separada[1], $info_separada[2], $info_separada[3]);
    } 

    if($info_separada[1] == ' Suporte Técnico ' && $visibilidade == 3) {
      aviso($info_separada[0], $info_separada[1], $info_separada[2], $info_separada[3]);
    } 

    if($info_separada[1] == ' Administração ' && $visibilidade == 4) {
      aviso($info_separada[0], $info_separada[1], $info_separada[2], $info_separada[3]);
    } 

    if($info_separada[1] == ' Recursos Humanos ' && $visibilidade == 5) {
      aviso($info_separada[0], $info_separada[1], $info_separada[2], $info_separada[3]);
    } 

    ?>

<?php
  }

  //echo 'funcionando';
}

    $banco = fopen('bancoDadosTxt.txt', 'r');
    

    $avisos = array();

    while(!feof($banco)) { 
        //testando pelo fim do arquivo, com o ! vai retornar true até encontrar o fim do arquivo, saindo do loop

        $registro = fgets($banco);
        //pega a linha do arquivo 

        $avisos[] = $registro;

    }

    fclose($banco);

    //tratamento para o caso de não ter avisos, no caso igual a 1 pois o arquivo é criado com uma linha
    if(count($avisos) == 1) { 
      //vai escrever um html que diz que não nenhum aviso

      echo '<h5 class="text-center mb-3">Não há avisos!</h5>';

    } else { 
      postarMural($avisos, $_SESSION['login_equipe']);
    }

  
    ?>

