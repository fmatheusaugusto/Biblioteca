<?php
	function editar_empresa() {

		require ("conectdb.php");
			@$id = $_POST['id'];
			@$cod = $_POST['codigo'];
			@$cpf = $_POST['cpf'];
			@$empresa = $_POST['empresa'];
			@$resp = $_POST['responsavel'];
			@$endereco = $_POST['endereco'];
			@$contato = $_POST['contato'];
			@$email = $_POST['email'];

			@$alteracao = "Alteração";
																					
			$editar = mysqli_query($conexao, "UPDATE cadastro SET cod_tributos = '$cod', nome = '$empresa', responsavel = '$resp', documento = '$cpf', endereco = '$endereco' , contato = '$contato', email = '$email' WHERE id = '$id'");
			
			if ($editar){
			 include("alertas/mens_cad_ok.php");
					 }
			}
	
	function ativo() {
		require ("conectdb.php");
							$id = $_POST['id'];
							$ativo = $_POST['ativo'];
							
														
							switch ($ativo) {
								case "S":
									$data = date("Y-m-d");
									$sql =  mysqli_query($conexao, "UPDATE cadastro SET ativo = 'N', data_desativa = '$data' WHERE id = '$id'");									
									break;
								case "N":
									$data = date("Y-m-d");
									$sql =  mysqli_query($conexao, "UPDATE cadastro SET ativo = 'S', data_ativa = '$data' WHERE id = '$id'");							
									break;
								case "":
									$inverte = "S";
									break;
							} 				
							 							                           							 
	}

	function nota_fiscal() {
		require ("conectdb.php");
							$id = $_POST['id'];
							$nota_fiscal = $_POST['nota_fiscal'];
							
														
							switch ($nota_fiscal) {
								case "S":
									$inverte = "N";
									break;
								case "N":
									$inverte = "S";
									break;
								case "":
									$inverte = "S";
									break;
							}

							
			 				$sql =  mysqli_query($conexao, "UPDATE cadastro SET nota_fiscal = '$inverte' WHERE id = '$id'");
							 							                           							 
	}

	function valor() {
		require ("conectdb.php");
							$id = $_POST['id'];
							$valor = $_POST['valor'];
							
							$conv_valor = str_replace(".","",$valor);
							$valor_certo = str_replace(",",".",$conv_valor);							

			 				$sql =  mysqli_query($conexao, "UPDATE cadastro SET valor = '$valor_certo' WHERE id = '$id'");
							 							                           							 
	}

	
?>