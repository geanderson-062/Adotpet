<?php
// Verificador de sessão
require "../../../system/controller/verificar_login.php";
?>

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
    <link rel="stylesheet" href="../../../resources/css/main_login.css">
    <link rel="stylesheet" href="../../../resources/css/main_style.css">
     
    <script src="../../../resources/js/mostrar_&_ocultar_senha.js"></script>

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

    <section class="container">
        <div class="text-dark text-center container pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center text-dark"> 
          <h1 class="display-4">Adotando </h1>
          <h1 class="display-6">(colocar nome do animal aqui)</h1>
            <br><br>
             
    
              <form action="" method="POST" class="container"><!--link do servidor-->
                <div>
                  <div>
                    Digite sua senha para confirmar a adoção.
                   
                    <br>
                  </div>
                         <div class="mb-3">
                          
                             <input type="password" name="subject" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha.">
                           </div>

                           <div>
 
                            <input type="checkbox" class="form-check-input" onclick="mostrarOcultarSenha(),mostrarOcultarSenha2()" id="exampleCheck1" value="_Exibir Senha">
                            <label class="form-check-label" for="exampleCheck1">Exibir Senha</label>
                            
                          </div>

                          <div class="mb-3">  
                            <br>
                            Por qual meio deseja ser contatado:
                           <input type="checkbox" class="form-check-input" id="exampleCheck1" value="_Exibir Senha">
                           <label class="form-check-label" for="exampleCheck1">E-mail</label>
                           <input type="checkbox" class="form-check-input" id="exampleCheck1" value="_Exibir Senha">
                           <label class="form-check-label" for="exampleCheck1">Whatsapp</label>
                           </div>
                  
                     <a href="confirmacao_adocao.html" class="btn btn-primary" type="submit" onclick=" alert('Adoção finalizada, entraremos em contato para falar do seu novo amigo.')">Adotar</a>
                  </div>
              
               </form>
    
        </section>

          <br>
          <br>
          <br>
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