<?php 

    session_start();

?> 

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="estilo/style.css">


    <title>Mural de Avisos - Sobre</title>
  </head>
  <body>
  <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <div class="container">
                    <a class="navbar-brand" href="index.php">Mural de Avisos</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>

                            <?php 
                            
                            if(isset($_SESSION['logado']) && $_SESSION['logado'] == true) { 
                                
                            ?>
                            
                                <li class="nav-item">
                                    <a class="nav-link" href="mural.php">Mural</a>
                                </li>

                            <?php

                            }

                            ?>


                            <li class="nav-item">
                                <a class="nav-link active" href="sobre.php">Sobre</a>
                            </li>

                            <?php 
                            
                            if(isset($_SESSION['logado'])) {
                                if($_SESSION['logado'] == true) { 

                                
                            ?>
                        
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">LOGOUT</a>
                            </li>

                            <?php

                                }
                            }
                            ?>

                            <?php 
                            
                                if(isset($_SESSION['logado']) == false)  { 

                            ?>
                    
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">LOGIN</a>
                            </li>

                            <?php

                                }
                        
                            ?>

                            <?php 
                            
                                if(isset($_SESSION['logado']) == true )  {

                                    if($_SESSION['logado'] == false) {
                                    
                                    

                                    
                            ?>
                
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">LOGIN</a>
                            </li>

                            <?php
                                    }
                                }
                    
                            ?>
                        </ul>
                    </div>        
            </div>
        </nav>
    </header>

    <article>
        <div class="container">
            <div class="row">
                <div class="col">

                    <h1 class="mt-3 mb-3 text-center">
                        Mural de Avisos
                    </h1>

                    <div>
                        <p>Bom, bem vindo ao mural de avisos. Esse projeto foi criado pensando em aplicar os meus conhecimentos em PHP rec??m adquiridos, apesar de eu reconhecer que tudo que eu fiz aqui provavelmente foi bem b??sico e existem formas mais modernas e melhores de fazer isso, eu optei por fazer esse projeto inicial para entender mais sobre esse universo. Bom, uma das coisas que percebi ao longo desse projeto ?? a necessidade de criar uma ponte entre o JS e o PHP, algumas altera????es na p??gina podiam ser muito simples usando JS mas como ainda n??o sabia como fazer, fiz puramente com PHP. Sei para isso preciso aprender AJAX (est?? na minha lista de coisas que preciso aprender agora). Tamb??m acredito que se eu tivesse optado por usar um banco de dados muitas coisas teriam sido mais sofistificadas, mas como n??o estudei isso apropriadamente para web, resolvi deixar puramente em PHP e optar por escrever o 'banco de dados' em um arquivo, algo que eu n??o tinha visto em nenhum outra linguagem at?? o momento e tive que fazer algumas pesquisas para saber como essa alternativa funciona.</p>

                        <p>Eu tamb??m n??o havia programado praticamente nada com PHP at?? o momento, o que eu sabia sobre programar com PHP at?? o momento eram exerc??cios b??sicos que fiz durante a gradua????o, gostei bastante de trabalhar com a linguagem e sinto que estou no caminho certo da programa????o web. </p>

                        <p>Sobre o programa em si, bom, ele ?? tecnicamente semelhante a alguns programas que eu j?? tinha feito como to do lists, por??m esse s??ria um to do list em que voc?? manda para algu??m. Meu foco, na verdade, n??o estava na aplica????o, que bem desenvolvida pode at?? ser ??til mas muita das ideias que eu tive para sua aplica????o eu n??o desenvolvi por quest??es de que atingi j?? tinha atingido meu objetivo que era fazer um sistema de login, onde v??rias perfis podem logar, e dependendo de qual perfil voc?? usar, teria mais ou menos limita????es. Eu consegui fazer isso ent??o me dou por satisfeito. Em algum momento pretendo fazer algum refactoring usando tecnologias mais interessantes e bancos de dados, que vai deixar tudo muito mais interessante. E tamb??m o AJAX, que certamente vai me dar alguma liberdade a mais em algumas coisas que gostaria de fazer. </p>

                        <p>Esse programa foi escrito com a inten????o de ganhar experi??ncia,  enriquecer meu portf??lio e aprender uma nova linguagem. Obrigado! </p> 

                        <p>Para usar esse sitema voc?? ir?? precisar baix??-lo e utilizar as seguintes combina????es: </p>

                        <p>Logins / senhas (se conseguir logar de outro jeito, parab??ns voc?? achou um bug ou uma falha de seguran??a(deixe-me saber!)):</p>

                        larissa@mural.com - 1234  <br>
                        elisangela@mural.com - 1234 <br>
                        maria@mural.com - 1234 <br>
                        carlos@mural.com - 1234  <br>
                        georgina@mural.com - 1234 <br>
                        murialdo@mural.com - 1234 <br>
                        matheus@mural.com - 1234 <br>
                        carlos@gmail.com - 1234 <br>
                        manuela@gmail.com - 1234 <br><br>

                        <p>Atente-se que o perfil larissa@mural.com ?? capaz de ver todos os avisos no sistema pois ?? qualificado como CEO da empresa. Tamb??m ?? capaz de escrever avisos.</p>

                        <p>Os perfis elisangela@mural.com, maria@mural.com, carlos@mural.com e georgina@mural.com. S??o capazes de mandar avisos mas s?? podem visualizar avisos que foram encaminhados para suas respectivas ??reas.</p>

                        <p>Os demais perfis s??o capazes apenas de ler o que est?? no site.</p>
                    </div>

                </div>
            </div>
        </div>
    </article>

    <footer class="text-center bg-primary text-light">
        <span>por Matheus Silveira &copy;	</span>
        <div>

            <a class="icones" href="https://github.com/matheusilveiraw"><ion-icon name="logo-github" size="large"></ion-icon></a>
            
            <a class="icones" href="https://www.linkedin.com/in/matheus-silveira-7b6574187/"><ion-icon name="logo-linkedin" size="large"></ion-icon></a>
            
        </div>

    </footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- ??CONES -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    

  </body>
</html>