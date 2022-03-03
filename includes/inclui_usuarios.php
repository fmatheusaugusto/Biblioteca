<?php
    $nome = $_POST['nome']; 
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $data_nasc = $_POST['data_nasc'];
    $endereco_rua = $_POST['endereco_rua'];
    $endereco_numero = $_POST['endereco_numero'];

    echo "ok 1";
    include ("funcoes.php");
    inclui_usuarios();
?>
