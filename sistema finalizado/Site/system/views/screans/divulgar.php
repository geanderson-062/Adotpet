<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--css-->
    <link rel="stylesheet" href="../../../resources/css/main_preloader.css">
    <link rel="stylesheet" href="../../../resources/css/main_style.css">

    <title>Adotpet</title>

      <!--favicon-->

<link rel="apple-touch-icon" sizes="57x57" href="../../../resources/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../../../resources/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../../../resources/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../../../resources/img/favicon.icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../../../resources/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../../../resources/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../../../resources/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../../../resources/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../../../resources/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../../../resources/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../../resources/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../../../resources/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../../resources/img/favicon/favicon-16x16.png">
<link rel="manifest" href="../../../resources/img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#38b6ff">
<meta name="msapplication-TileImage" content="../../../resources/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#38b6ff">

    <!--fim favicon-->
    
  </head>
  <body>
    
    <header>
  
      <nav class="navbar navbar-light corPrimaria">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="../../../index.html">
            <img src="../../../resources/img/icone_navbar.png" alt="" width="30" height="24">
            Adotpet
          </a>
        
        </div>
      </nav>

    </header>

    <br>
    <br>
    <br>

    <section class="container"><!--barra de dados-->
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center text-dark"></div>
        <h1 class="display-4 text-center">Divulgar</h1>

        <div class="alert alert-info" role="alert">
          Se possível envie uma foto do animal.
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
            <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
          </svg>
        </div>
   
 <form action="../../../system/controller/divulgar.php" method="POST" class="container"><!--link do servidor-->
  

 <div class="mb-3">
    <label for="nome" class="labelInput">&nbspNome completo: *</label>
    <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu nome completo" required>
  </div>
 
 <div class="mb-3">
  <label for="text" class="labelInput">&nbspInforme seu número para contato com DDD *</label>
  <input type="tel" name="telefone" class="form-control" id="exampleFormControlInput1" placeholder="Número para contato" maxlength="11" required>
</div>

<div class="mb-3">
  <label for="text" class="labelInput">&nbspEndereço completo: *</label>
  <input type="text" name="endereco" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu endereço" required>
</div>
<div class="mb-3">
  <label for="text" class="labelInput">&nbspCidade: *</label>
  <input type="text" name="cidade" class="form-control" id="exampleFormControlInput1" placeholder="Digite sua cidade" required>
</div>

<div class="mb-3">
  <label for="text" class="labelInput">&nbspBairro: *</label>
  <input type="text" name="bairro" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu bairro" required>
</div>

<div class="mb-3">
  <label for="text" class="labelInput">&nbspEstado *</label>
  <input type="text" name="uf" class="form-control" id="exampleFormControlInput1" placeholder="Digite sua UF" minlength="2" maxlength="2" required>
</div>

  <div class="mb-3">
    <label for="email" class="labelInput">&nbspEmail: *</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu e-mail" required>
  </div>

      <input type="file" name="arquivo" hidden="true"/>
      <input class="btn btn-secondary" type="file" value="Enviar arquivo"/>

      <div class="d-grid gap-2 col-6 mx-auto"><div class="d-grid gap-2 col-6 mx-auto"></div>
    <input type="submit" class="btn btn-primary" name="Enviar"  id="submit" value="Enviar">
  </div>

 </form>

  <br><br><br><br><br><br>
  </section>

   

          <br>
          <br>
          <br>

         

          <br>
          <br>
          <br>

           <!--preloader-->

    <div class="overlay">
      <div class="loader"></div>
    </div>
  <script src="../../../resources/js/preloader.js"></script> 

  <!--preloader-->

  <footer class="py-3 my-4 corPrimaria">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3 ">
     
      <li class="nav-item"><a href="../public/quem_somos.html" class="nav-link px-2  text-white">Quem nós somos?</a></li>
      <li class="nav-item"><a href="../public/doacoes.html" class="nav-link px-2  text-white">Doações</a></li>
      <li class="nav-item"><a href="../public/contato.html" class="nav-link px-2  text-white">Contato</a></li>
      <li class="nav-item"><a href="../public/politica_de_privacidade.html" class="nav-link px-2  text-white">Política de Privacidade</a></li>
      
    </ul>
    <p class="text-center text-white">© 2021 Adotpet Company, Inc</p>
  </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>