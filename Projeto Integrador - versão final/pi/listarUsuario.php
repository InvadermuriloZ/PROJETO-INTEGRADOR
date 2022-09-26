<?php
    include "conexao.php";
    include "controle.php";
    
    
    $sql = "select * from usuarios order by login";
    $seleciona = mysqli_query($conexao,$sql);
    
?>

        <div class="container pag">
            <div class="text-end">
                <a href="formularioUsuario.php"> <button type="button" class="btn btn-success btn-sm">Cadastrar Novo Usuário</button> </a>
            </div>
            <h2>Lista de Usuários</h2>
            <div class="container text-center">
                <div class="row bg-dark text-light espaco">
                    <div class="col-1">
                        LOGIN
                     </div>    
                    <div class="col-2">
                        NOME
                    </div>
                    <div class="col-1">
                        SENHA
                    </div>
                    
                    <div class="col-1">
                        NIVEL
                    </div>
                    <div class="col-2">
                        EMAIL
                    </div>
                    <div class="col-2">
                        TELEFONE
                    </div>
                    <div class="col-3">
                        CONTROLE
                    </div>
                </div>
                <?php                     
                    while ($exibe = mysqli_fetch_array($seleciona)){
                        $login = $exibe['login'];                        
                ?>
                 <div class="row bg-gradient espaco">
                    <div class="col-1">
                        <?php echo $exibe['login'] ?>
                    </div>
                    <div class="col-2">
                        <?php echo $exibe['nome']?>
                    </div>
                    <div class="col-1">
                        <?php echo $exibe['senha']?>
                    </div>
                    <div class="col-1">
                        <?php echo $exibe['nivel']?>
                    </div>
                    <div class="col-2">
                        <?php echo $exibe['email']?>
                    </div>
                    <div class="col-2">
                        <?php echo $exibe['telefone']?>
                    </div>
                    <div class="col-3">
                        <a href="visualizarUsuario.php?login=<?php echo $login ?>"><button type="button" class="btn btn-success btn-sm botao">Visualizar</button></a>
                        <a href="editarUsuario.php?login=<?php echo $login ?>"><button type="button" class="btn btn-primary btn-sm botao">Editar</button></a>
                        <a href="excluirUsuario.php?login=<?php echo $login ?>" onclick="return confirm('Confirmado o exclusão do usuário do Usuário?')" > <button type="button" class="btn btn-danger btn-sm">Excluir</button> </a>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>  

        <?php
            include "footer.php";
        ?>

   