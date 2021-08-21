<?php
	@header('Content-Type: text/html; charset=utf-8');
	$servername = "127.0.0.1";
	$database = "biblioteca";
	$username = "root";
	$password = "";
	$conexao = mysqli_connect($servername, $username, $password, $database); // Conectando a
	mysqli_set_charset($conexao, 'utf8');
	if (!$conexao) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>