<?php 
    $banco = fopen('bancoDadosTxt.txt', 'r');
    
    $avisos = array();

    while(!feof($banco)) { 
        //testando pelo fim do arquivo, com o ! vai retornar true até encontrar o fim do arquivo, saindo do loop

        $registro = fgets($banco);
        //pega a linha do arquivo 

        $avisos[] = $registro;

    }

    fclose($banco);
  
    function postarMural ($avisos=array()) { 
      //$avisos_divididos = explode('-/-', $avisos[0]);

      for($i = 0; $i < count($avisos) - 1; $i++) { 

        $info_separada = explode('-/-', $avisos[$i]);
        /*echo $info_separada[0] . '<br>';
        echo $info_separada[1] . '<br>';
        echo $info_separada[2] . '<br>';
        echo $info_separada[3] . '<br>';
        echo '-------- <br>';*/

        ?>

      <div class="card">
        <div class="card-header">
          <?= $info_separada[0] ?>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p> <?= $info_separada[2] ?> </p>
            <footer class="blockquote-footer"><?= $info_separada[3]  ?></footer>
          </blockquote>
        </div>
      </div>
    
    <?php
      }

      //echo 'funcionando';
    }
  
      postarMural($avisos);

    ?>

