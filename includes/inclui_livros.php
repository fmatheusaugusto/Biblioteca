<?php
    $titulo = $_POST['titulo']; 
    $classificacao = $_POST['classificacao'];
    $autores = $_POST['autores'];
    $codigo = $_POST['codigo'];
    $exemplar = $_POST['exemplar'];
    $localizacao = $_POST['localizacao'];
	$data_hoje = $_POST['data_hoje'];

    include ("funcoes.php");
    include (inclui_livros());

    echo "SALVO";
?>
