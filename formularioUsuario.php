<?php
include"controle.php";



?>
        <div class="container pag">
            <h1>Cadastro de Usuarios</h1>
            <form name="form" method="post" action="incluirAluno.php"> 
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" required>
            </div>
            <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" class="form-control" id="login" name="login" required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="number" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-success text-light">Cadastrar</button>
            </form>
        
        </div> 
      
    
 <?php
    include"footer.php";
   ?>