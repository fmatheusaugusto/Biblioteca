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

function lista_livros()
{
	require("conectdb.php");
	$sql = "SELECT * FROM livros ORDER BY titulo" or die("Erro");
	$limite = mysqli_query($conexao, "$sql");

	while ($sql = mysqli_fetch_array($limite)) {
		$titulo = $sql['titulo'];
		$autores = $sql['autores'];
		$localizacao = $sql['localizacao'];
		$codigo = $sql['codigo'];

		include("../includes/lista_livros.php");
	}
}

function lista_usuarios()
{
	require("conectdb.php");
	$sql = "SELECT * FROM usuarios ORDER BY nome" or die("Erro");
	$limite = mysqli_query($conexao, "$sql");

	while ($sql = mysqli_fetch_array($limite)) {
		$nome = $sql['nome'];
		$endereco_rua = $sql['endereco_rua'];
		$endereco_numero = $sql['endereco_numero'];
		$telefone = $sql['telefone'];
		$cpf = $sql['cpf'];

		include("../includes/lista_usuarios.php");
	}
}
