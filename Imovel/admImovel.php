<?php
  include"../controle.php";
  
?>

<style>
    img{
         max-width: 180px;

    }
    .quadro a img{
        opacity: 0.5;
        width: 50%;      
    }
    .quadro a:hover img{
        opacity: 1;
    }
    a{
        text-decoration: none;

    }

</style>
  
  <div class="container mt-5">
      <div class="row text-center ">
          <div class="col">
          <a href="Usuario/listarImovel.php">  
          <img src="img/usuario.png">
              <p>Usuario</p>
         </a>
         </div>
         
          <div class="col">
         <a href="Aluno/listarImovel.php">
              <img src="img/aluno.jpeg">
              <p>ADM</p>
         </a>

         </div>
          <div class="col">
          <a href="Professor/listarImovel.php">
              <img src="img/professor.png">
              <p>Imovel</p>
         </a>

         </div>

      </div>

  </div>

  <?php
    include"../footer.php";
  ?>