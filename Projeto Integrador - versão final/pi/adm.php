<?php
  include "controle.php";
  
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
          <a href="listarUsuario.php">  
          <img src="img/Vr.jpg">
              <p>USUÁRIO</p>
         </a>
         </div>
         
          <div class="col">
         <a href="listarImovel.php">
              <img src="img/predio02.png">
              <p>IMÓVEL</p>
         </a>

         </div>
         

      </div>

  </div>

  <?php
    include "footer.php";
  ?>