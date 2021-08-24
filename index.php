<?php
$pdo = new PDO('mysql:host=localhost;dbname=bootstrap','root','');
$sobre =$pdo->prepare("SELECT * FROM `sobre`");
$sobre->execute();
$sobre = $sobre->fetch()['sobre'];
?>



<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>

<div class="fixed-top">
<!--<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h2 class="float-md-start mb-0" style="color: white;"><?php echo htmlentities('[')?>PROG_DEV<?php echo htmlentities(']')?></h2>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>
  </header>
</div>-->
  
  <header class="p-3 bg-black text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

       <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>-->

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
  </div>
  <div class="box">
    <section class="banner">
      <div class="overlay"></div>
      <div class="container chamada-banner">
        <div class="row">
          <div class="col-md-12">
          <h2><?php echo htmlentities('[')?>PROG_DEV<?php echo htmlentities(']')?></h2>
          <p >Focado em desenvolvimento de aplicações web</p>
          <div class="d-grid gap-2 col-2 mx-auto">
          <button class="btn btn-outline-light" type="button">Saiba Mais</button>
          </div>
          </div>
        </div><!--row-->
      </div><!--container-->
    </section><!--banner-->
    </div><!--box-->

    <section class="cadastro-lead">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-6">
           <h2 style="color: black;">Entre em contato com agente!</h2>
          </div>
          <div class="col-md-6">
            <form method="post">
              <input type="text" name="nome">
              <input type="submit" value="Enviar">
            </form>
          </div>
        </div><!--row-->
      </div><!--container-->
    </section><!--cadastro-lead-->


    <section class="depoimentos">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2>Depoimentos</h2>
            <blockquote>
              <p>Eu não vou por os fundamentos da minha fé em pequenos deuses que podem ser destruídos em uma era atômica, mas em um Deus que tem sido nosso socorro desde as eras passadas, e nossa esperança para os anos que virão, e nosso abrigo no tempo da tempestade, e nosso eterno lar. Este é o Deus em quem eu estou colocando o fundamento da minha fé. Este é o Deus que eu rogo a vocês para adorarem nesta manhã.</p>
            </blockquote>
          </div>
        </div><!--row-->
      </div><!--container-->
    </section><!--depoimestos-->
    <section class="linha">
      <div class="separar"></div>
    </section>

    <section class="diferenciais text-center">
      <h2>Conheça nossos diferenciais</h2>
      <div class="container diferenciais-container">
        <div class="row"><?php echo $sobre;?></div>
          
        
      </div>
    </section>

    <section class="equipe">
      <h2>Nossa Equipe</h2>
      <div class="container equipe-container">
        <div class="row">
          <div class="col-md-6">
            <div class="equipe-single">
              <div class="row">
                <div class="col-md-3">
                  <div class="user-picture">
                    <div class="user-picture-child"></div>
                  </div>
                </div>
                <div class="col-md-9">
                  <h3>PROG_DEV</h3>
                  <p>Eu não vou por os fundamentos da minha fé em pequenos deuses que podem ser destruídos em uma era atômica, mas em um Deus que tem sido nosso socorro desde as eras passadas, e nossa esperança para os anos que virão</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="equipe-single">
              <div class="row">
                <div class="col-md-3">
                  <div class="user-picture">
                     <div class="user-picture-child"></div>
                  </div>
                </div>
                <div class="col-md-9">
                  <h3>PROG_DEV</h3>
                  <p>Eu não vou por os fundamentos da minha fé em pequenos deuses que podem ser destruídos em uma era atômica, mas em um Deus que tem sido nosso socorro desde as eras passadas, e nossa esperança para os anos que virão</p>
                </div>
              </div>
            </div>
          </div>
              <div class="col-md-6">
            <div class="equipe-single">
              <div class="row">
                <div class="col-md-3">
                  <div class="user-picture">
                     <div class="user-picture-child"></div>
                  </div>
                </div>
                <div class="col-md-9">
                  <h3>PROG_DEV</h3>
                  <p>Eu não vou por os fundamentos da minha fé em pequenos deuses que podem ser destruídos em uma era atômica, mas em um Deus que tem sido nosso socorro desde as eras passadas, e nossa esperança para os anos que virão</p>
                </div>
              </div>
            </div>
          </div>
              <div class="col-md-6">
            <div class="equipe-single">
              <div class="row">
                <div class="col-md-3">
                  <div class="user-picture">
                     <div class="user-picture-child"></div>
                  </div>
                </div>
                <div class="col-md-9">
                  <h3>PROG_DEV</h3>
                  <p>Eu não vou por os fundamentos da minha fé em pequenos deuses que podem ser destruídos em uma era atômica, mas em um Deus que tem sido nosso socorro desde as eras passadas, e nossa esperança para os anos que virão</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="final-site">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form>
                 <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Digite seu Email.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Aceite os termos</label>
                  </div>
                  <button type="submit" class="btn btn-outline-light">Login</button>
                </form>
          </div>

          <div class="col-md-6">
            
          </div>
        </div>
      </div>
    </section>

     <section class="linha">
      <div class="separar"></div>
    </section>

    <footer class="page-footer font-small unique-color-black bg-black pt-4">

          <!-- Footer Elements -->
          <div class="container">

            <!-- Call to action -->
            <ul class="list-unstyled list-inline text-center py-2">
              <li class="list-inline-item">
                <h5 class="mb-1 text-white">Register for free</h5>
              </li>
              <li class="list-inline-item">
                <a href="#!" class="btn btn-outline-light ">Sign up!</a>
              </li>
            </ul>
            <!-- Call to action -->

          </div>
          <!-- Footer Elements -->

          <!-- Copyright -->
          <div class="footer-copyright text-center text-white py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> PROG_DEV.COM</a>
          </div>
          <!-- Copyright -->

</footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

