<?php
//função inverter data
function inverteData($data)
{
	if (count(explode("/", $data)) > 1) {
		return implode("-", array_reverse(explode("/", $data)));
	} elseif (count(explode("-", $data)) > 1) {
		return implode("/", array_reverse(explode("-", $data)));
	}
} // fim inverterdata

function lista_usuarios()
{
	require("conectdb.php");
	$sql = "SELECT * FROM usuarios ORDER BY nome" or die("Erro");
	$limite = mysqli_query($conexao, $sql);

	while ($sql = mysqli_fetch_array($limite)) {
		$nome = $sql['nome'];
		$endereco_rua = $sql['endereco_rua'];
		$endereco_numero = $sql['endereco_numero'];
		$telefone = $sql['telefone'];
		$cpf = $sql['cpf'];
		include("lista_usuarios.php");
	}
}

function lista_livros()
{
	require("conectdb.php");
	$sql = "SELECT * FROM livros ORDER BY titulo" or die("Erro");
	$limite = mysqli_query($conexao, $sql);

	while ($sql = mysqli_fetch_array($limite)) {
		$titulo = $sql['titulo'];
		$autores = $sql['autores'];
		$localizacao = $sql['localizacao'];
		$codigo = $sql['codigo'];
		include("lista_livros.php");
	}
}

function inclui_usuarios(){
	require("conectdb.php");

    $nome = $_POST['nome']; 
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $data_nasc = $_POST['data_nasc'];
    $endereco_rua = $_POST['endereco_rua'];
    $endereco_numero = $_POST['endereco_numero'];

    $query = "INSERT INTO usuarios VALUES ('','$nome','$data_nasc','$cpf','$telefone','$endereco_rua','$endereco_numero')";
    
	mysqli_query($conexao, $query);
}

function inclui_livros(){
	require("conectdb.php");

	$titulo = $_POST['titulo']; 
    $classificacao = $_POST['classificacao'];
    $autores = $_POST['autores'];
    $codigo = $_POST['codigo'];
    $exemplar = $_POST['exemplar'];
    $localizacao = $_POST['localizacao'];
	$data_hoje = $_POST['data_hoje'];

    $query = "INSERT INTO livros VALUES ('','$codigo','$titulo','$classificacao','$exemplar','$autores','$localizacao','$data_hoje')";
	
	mysqli_query($conexao, $query);
}
