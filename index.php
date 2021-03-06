<?php 

    session_start();

    $banco = fopen('bancoDadosTxt.txt', 'a'); //nesse caso, w parece uma opção tbm mas optando por a pois parece uma opção mais garantida

    fclose($banco);

    //abri o arquivo aqui para evitar um bug que acontecia na primeira vez que abre o mural 

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


    <title>Mural de Avisos - Inicio</title>
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
                                <a class="nav-link active" href="index.php">Home</a>
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
                                <a class="nav-link" href="sobre.php">Sobre</a>
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

                    <p>
                        Olá, seja bem vindo ao Mural de Avisos. Esse é um Web App criado por Matheus Silveira. Esse projeto nasce com o objetivo único de aprimorar minhas habilidades com HTML, CSS, JS e PHP, este último qual estou aplicando pela primeira vez em um trabalho pessoal.
                    </p>

                    <p>
                        Nesse trabalho eu não estarei usando banco de dados, simplesmente algumas informações do Backend (babysteps). Para usar o app você precisará logar-se nele e para logar nele as informações estarão abaixo desse tópico em algum momento. 
                    </p>

                    <p>
                        Se você tem interesse em conversar comigo, você pode me mandar um e-mail em matheus.silveiraw@gmail.com.
                    </p>

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