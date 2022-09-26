<?php
include "conexao.php";

if (isset($_POST['local'])) {
    $local = $_POST['local'];

    //recebendo os arquivos de imagem
    $nome = $_FILES['foto']['name'];
    $temp = $_FILES['foto']['tmp_name'];
    $caminho = 'Fotos/';
    $foto = $caminho . $nome;

    //update de imagem
    $upload = move_uploaded_file($temp, $foto); //Transferiu para o servidor

    if ($upload) {
        $sql = "update imovel set foto = '$foto' where local = '$local'";
        $alterar = mysqli_query($conexao, $sql);
    
        if ($alterar) {
            echo "
                $foto $local
                    <script>
                        alert('Foto Atualizada com sucesso');
                        window.location = 'listarImovel.php';
                    </script>
                ";
        } else {
            echo "
            <p> Sistema Temporariamente fora do ar.
            Tente novamente mais tarde. </p>
            <p> Entre em contato com o administrador do Sistema </p>
            ";
            echo mysqli_error($conexao);
        }
    }
} else {
    echo "
    <p> Esta é uma página de tratamento de dados. </p>
    <p> Clique <a href='listarImovel.php'> aqui </a> para selecionar um Imovel. </p>
    ";
}








