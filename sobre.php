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
                        <p>Bom, bem vindo ao mural de avisos. Esse projeto foi criado pensando em aplicar os meus conhecimentos em PHP recém adquiridos, apesar de eu reconhecer que tudo que eu fiz aqui provavelmente foi bem básico e existem formas mais modernas e melhores de fazer isso, eu optei por fazer esse projeto inicial para entender mais sobre esse universo. Bom, uma das coisas que percebi ao longo desse projeto é a necessidade de criar uma ponte entre o JS e o PHP, algumas alterações na página podiam ser muito simples usando JS mas como ainda não sabia como fazer, fiz puramente com PHP. Sei para isso preciso aprender AJAX (está na minha lista de coisas que preciso aprender agora). Também acredito que se eu tivesse optado por usar um banco de dados muitas coisas teriam sido mais sofistificadas, mas como não estudei isso apropriadamente para web, resolvi deixar puramente em PHP e optar por escrever o 'banco de dados' em um arquivo, algo que eu não tinha visto em nenhum outra linguagem até o momento e tive que fazer algumas pesquisas para saber como essa alternativa funciona.</p>

                        <p>Eu também não havia programado praticamente nada com PHP até o momento, o que eu sabia sobre programar com PHP até o momento eram exercícios básicos que fiz durante a graduação, gostei bastante de trabalhar com a linguagem e sinto que estou no caminho certo da programação web. </p>

                        <p>Sobre o programa em si, bom, ele é tecnicamente semelhante a alguns programas que eu já tinha feito como to do lists, porém esse séria um to do list em que você manda para alguém. Meu foco, na verdade, não estava na aplicação, que bem desenvolvida pode até ser útil mas muita das ideias que eu tive para sua aplicação eu não desenvolvi por questões de que atingi já tinha atingido meu objetivo que era fazer um sistema de login, onde várias perfis podem logar, e dependendo de qual perfil você usar, teria mais ou menos limitações. Eu consegui fazer isso então me dou por satisfeito. Em algum momento pretendo fazer algum refactoring usando tecnologias mais interessantes e bancos de dados, que vai deixar tudo muito mais interessante. E também o AJAX, que certamente vai me dar alguma liberdade a mais em algumas coisas que gostaria de fazer. </p>

                        <p>Esse programa foi escrito com a intenção de ganhar experiência,  enriquecer meu portfólio e aprender uma nova linguagem. Obrigado! </p> 

                        <p>Para usar esse sitema você irá precisar baixá-lo e utilizar as seguintes combinações: </p>

                        <p>Logins / senhas (se conseguir logar de outro jeito, parabéns você achou um bug ou uma falha de segurança(deixe-me saber!)):</p>

                        larissa@mural.com - 1234  <br>
                        elisangela@mural.com - 1234 <br>
                        maria@mural.com - 1234 <br>
                        carlos@mural.com - 1234  <br>
                        georgina@mural.com - 1234 <br>
                        murialdo@mural.com - 1234 <br>
                        matheus@mural.com - 1234 <br>
                        carlos@gmail.com - 1234 <br>
                        manuela@gmail.com - 1234 <br><br>

                        <p>Atente-se que o perfil larissa@mural.com é capaz de ver todos os avisos no sistema pois é qualificado como CEO da empresa. Também é capaz de escrever avisos.</p>

                        <p>Os perfis elisangela@mural.com, maria@mural.com, carlos@mural.com e georgina@mural.com. São capazes de mandar avisos mas só podem visualizar avisos que foram encaminhados para suas respectivas áreas.</p>

                        <p>Os demais perfis são capazes apenas de ler o que está no site.</p>
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

    <!-- ÍCONES -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    

  </body>
</html>