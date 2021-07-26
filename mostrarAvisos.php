<?php 


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

function postarMural ($avisos=array()) { 
  //$avisos_divididos = explode('-/-', $avisos[0]);

  for($i = 0; $i < count($avisos) - 1; $i++) { 

    $info_separada = explode('-/-', $avisos[$i]);
    /*echo $info_separada[0] . '<br>'; titulo
    echo $info_separada[1] . '<br>'; destino
    echo $info_separada[2] . '<br>'; conteudo 
    echo $info_separada[3] . '<br>'; quem mandou
    echo '-------- <br>';*/

    aviso($info_separada[0], $info_separada[1], $info_separada[2], $info_separada[3]);

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
      postarMural($avisos);
    }

  
    ?>

