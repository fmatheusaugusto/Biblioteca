<?php
	@header('Content-Type: text/html; charset=utf-8');
	$servername = "localhost";
	$database = "biblioteca";
	$username = "dbuser";
	$password = "";
	$conexao = mysqli_connect($servername, $username, $password, $database); // Conectando a
	mysqli_set_charset($conexao, 'utf8');
	if (!$conexao) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>