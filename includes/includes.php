<?php
    require("conectdb.php");
    $nome = $_POST['nome']; 
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $data_nasc = $_POST['data_nasc'];
    $endereco_rua = $_POST['endereco_rua'];
    $endereco_numero = $_POST['endereco_numero'];
    
    $string_sql = "INSERT INTO usuarios (nome,telefone,cpf,data_nasc,endereco_rua,endereco_numero) VALUES (null,'$nome','$telefone','$cpf','$data_nasc','$endereco_rua','$endereco_numero')";
    $insert_member_res = mysqli_query($conexao, $string_sql);
    echo"Ok";
?>