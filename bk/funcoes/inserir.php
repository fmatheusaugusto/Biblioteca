<?php
date_default_timezone_set("America/Sao_Paulo");

	function inserir_empresa() {

			require ("conectdb.php");
				@$cod = $_POST['codigo'];
				@$cpf = $_POST['cpf'];
				@$empresa = $_POST['empresa'];
				@$resp = $_POST['responsavel'];
				@$endereco = $_POST['endereco'];
				@$contato = $_POST['contato'];
				@$email = $_POST['email'];
				@$valor = $_POST['valor'];
				@$nf = $_POST['nf'];
				@$periodo = $_POST['periodo'];
				@$ativo = $_POST['ativo'];

				@$cadastro = "Cadastro";

				$data = date("Y-m-d");

				$conv_valor = str_replace(".","",$valor);
				$valor_certo = str_replace(",",".",$conv_valor);
																				
				$inserir = mysqli_query($conexao, "INSERT INTO cadastro VALUES ('', '$cod', UCASE('$empresa'), UCASE('$resp'), '$cpf', UCASE('$endereco'), '$contato', '$email', '$valor_certo', '$nf', '$periodo', '$ativo', '$data', '')");
				
				if ($inserir){
				 include("alertas/mens_cad_ok.php");
						 }
				}	
?>