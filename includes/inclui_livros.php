<?php
    $titulo = $_POST['titulo']; 
    $classificacao = $_POST['classificacao'];
    $autores = $_POST['autores'];
    $codigo = $_POST['codigo'];
    $exemplar = $_POST['exemplar'];
    $localizacao = $_POST['localizacao'];
	$data_hoje = $_POST['data_hoje'];

    include ("funcoes.php");
    inclui_livros();

	if(isset($_POST['salvar'])){
        session_start();
		$_SESSION['alerta'] = "1";
	}
	
?>
<script>
    window.location.replace("http://prefeituradecassiamg.com.br/sistemas/Biblioteca/#ajax/cadastra_livro.php");
</script>
