<?php
include "controle.php";
?>
  <div class="row">
    <div class="col">
      <img src="img/empresaria.jpg" class="imagem" width="800" height="600">
      <p class="cor">Pronto</p>
    </div>
    <div class="col">
      <h2>Pronto pra descobrir mais de 10 milhões</h2>
      <h2>de IMÓVEIS?</h2>
      <div>
        <h4 class="bg">IMOBIL, pronto pra mudança.</h4>
      </div>
      <hr>
      <div>
        <h6>O que você precisa ?</h6>
        <button class="btn btn-primary btn-lg">Comprar</button>
        <button class="btn btn-light btn-lg">Alugar</button>
        <button class="btn btn-light btn-lg">lançamentos</button>
      </div>
      <hr>
      <div class="dropdown">
        <h6>Qual tipo?</h6>
        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Todos os imóveis
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Andaraí</a></li>
          <li><a class="dropdown-item" href="#">Botafogo</a></li>
          <li><a class="dropdown-item" href="#">Centro</a></li>
          <li><a class="dropdown-item" href="#">Copacabana</a></li>
          <li><a class="dropdown-item" href="#">DelCastilho</a></li>
          <li><a class="dropdown-item" href="#">Flamengo</a></li>
          <li><a class="dropdown-item" href="#">Ipanema</a></li>
          <li><a class="dropdown-item" href="#">Leblon</a></li>
          <li><a class="dropdown-item" href="#">Maracanã</a></li>
        </ul>
      </div>
      <div>
        <h6>Onde?</h6>
        <form class="d-flex" role="Digite um bairro">
          <input class="form-control me-2" type="Digite um bairro" placeholder="Digite um bairro" aria-label="Digite um bairro">
        </form>
      </div>
      <hr>
      <div>
        <a href="login.php"><button type="button" class="btn btn-danger"><img src="img/searchmagnifierinterfacesymbol_79894.png" width="20"> Buscar</button></a>
      </div>
    </div>
  </div>
  <div>
    <h3 class="text-center">Compre ou venda o imóvel ideal</h3>
  </div>
  <hr>
  <div class="row">
    <div class="col">
      <button type="submit"><img src="img/1030438_15081214210034117680.png" width="760" height="638" class="img200"></button>
    </div>
    <div class="col-6">
      <button type="submit"><img src="img/Apartment-1.jpeg" width="750" height="300"></button>
      <hr>
      <button type="submit"><img src="img/logan_apartments.6.jpg" width="750" height="300"></button>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col">
      <img src="img/Rental-Apartment01.jpg" width="500">
    </div>
    <div class="col">
      <center class="goiaba">
        <h3 class="cor">Anuncie grátis</h3>
        <h3 class="cor">para mais de 50</h3>
        <h3 class="cor">mil pessoas</h3>
        <h3 class="cor">todos os dias</h5>
          <marquee  style="border:RED 3px SOLID" SCROLLAMOUNT="15"  class="mar"><h3>PROMOÇÕES À PARTIR DE HOJE!!!!!</h3></marquee>
      </center>
    </div>
    <div class="col">
      <img src="img/moving_.jpg" width="500">
    </div>
  </div>
  
<?php
 include "footer.php";
?>