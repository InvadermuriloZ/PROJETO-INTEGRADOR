<?php

    session_start(); //inicia a sessão
    $_SESSION = array(); //carrega o array de dados
    session_destroy(); //destroi todas as sessôes iniciadas
    header('location: \rafael\loginImovel.php'); // redireciona para a área de login

?>
