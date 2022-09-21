<?php
    include"conexao.php";
    include"controle.php";

    if(isset($_GET['local'])){

        $login = $_GET['local'];
        
        $sql = "select * from imovel where local = '$login'";
        $seleciona = mysqli_query($conexao,$sql);
        $exibe = mysqli_fetch_array($seleciona);

        $senha = $exibe['senha'];
        $login = $exibe['login'];
        $email = $exibe['email'];
    }
    
?>

        <div class="container bg-info pag">    
            <h1>Login</h1>
            <hr>
            <form >
                <div class="mb-3">
                    <input type="hidden" id="login" name="entra" value="<?php echo $login; ?>">                    
                </div>                
                <div class="mb-3">
                    <label for="nome" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="senha" class="form-control" id="senha" name="senha" value="<?php echo $email; ?>" placeholder="nome@exemplo.com" required>
                </div>
                
                <div class="row mt-5">
                    <div class="col text-start">
                        <a href="listarImovel.php"> <button type="button" class="btn btn-warning btn-sm">VOLTAR</button> </a>
                    </div>
                    <div class="col">
                        <button type="editarSenha.php?login<?php echo $login; ?>" class="btn btn-danger btn-sm botao">ALTERAR SENHA</button></a>
                    </div>
                    <div class="col text-end">
                        <button type="submit" class="btn btn-primary btn-sm botao">ALTERAR DADOS</button></a>
                    </div>
                </div>
            </form>           
        </div>

        </body>
        </html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  









