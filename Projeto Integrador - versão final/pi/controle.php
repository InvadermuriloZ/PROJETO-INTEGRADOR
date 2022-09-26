<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IMOBIL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="">
    <nav class="navbar navbar-expand-lg ">
      <h1><a href="index.php"><img src="img/IMOBIL.png" width="100"></h1></a>
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="comprar.php">Comprar/Alugar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Parceiros.php">Parceiros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="financiamento.php">Financiamento</a>
            </li>
          </ul>
        </div>
      </div>
      <div>
        <a href="comprar.php"><button type="button" class="btn btn-primary">Anunciar</button></a>
      </div>
      <div class="text">
        <a href="login.php"><button type="submit" class="btn btn-light">Entrar</button></a>

      </div>
      <div class="col text-end link">
      <?php
                  if (!isset($_SESSION)){
                        session_start();
                  }
                  if(isset($_SESSION['login'])){
                        $login = $_SESSION['login'];
                        $nome = $_SESSION['nome'];
                       
                        
                        echo "Bem vindo, $nome | <a href='\pi/logout.php'> Logout <a/>";
                  }
                 
                    ?>
                    
              </div>

           </div>

         </div>
    </nav>
  </div>
