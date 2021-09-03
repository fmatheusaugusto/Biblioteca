<?php
date_default_timezone_set("America/Sao_Paulo");
include("conectdb.php");
	function buscar_paciente() 
			{
				// Verifica se a variável $_POST não é vazia...
				// ou seja: houve um submit no formulário
				if (!empty($_POST['nome1'])) {
					@$busca="3";
				}
				if (!empty($_POST['doc'])) {
					@$busca="1";
				}
				if (!empty($_POST['sus'])) {
					@$busca="2";
				}
			
			switch (@$busca) {
					case "1":
						@$select="where documento='".$_POST['doc']."'";
						break;
					case "2":
						@$select="where sus='".$_POST['sus']."'";
						break;
					case "3":
						@$select="where nome LIKE'".$_POST['nome1']."%'";
						break;
						
				}
				if (@$select!=""){				
				@$condicao=$select;
				$sql = "SELECT * FROM pacientes $condicao";
							$limite = mysql_query("$sql");
							$resultado = mysql_num_rows($limite);
							if ($resultado == ""){
								echo '<div class="alert alert-danger fade in">
											<button class="close" data-dismiss="alert">
												×
											</button>
											<i class="fa-fw fa fa-times-circle"></i>
											<strong>Erro!</strong><br>Nenhum resultado encontrado.<br>
															Verifique se os dados digitados estão corretos.
									</div>';
								}
                           	while  ($sql = mysql_fetch_array ($limite)) {
									$id = $sql['id'];
									$documento = $sql['documento'];
									$nome = $sql['nome'];
									$endereco = $sql['endereco'];
									$numero = $sql['numero'];
									$bairro = $sql['bairro'];
									$cidade = $sql['cidade'];
									$uf = $sql['uf'];
									$contato = $sql['contato'];
									include("res_busca_paciente.php");
							}
				 } else { echo '<div class="alert alert-danger fade in">
									<button class="close" data-dismiss="alert">
										×
									</button>
									<i class="fa-fw fa fa-times-circle"></i>
									<strong>Erro!</strong><br>Nenhum resultado encontrado.<br>
															Preencha pelo menos um dos campos abaixo.
								</div>';
						}
			}
			
			
	function buscar_cidade() 
			{
				$sql = "SELECT * FROM cidade order by cidade";
							$limite = mysql_query("$sql");
							$resultado = mysql_num_rows($limite);
						
                           	while  ($sql = mysql_fetch_array ($limite)) {
									$id_cidade = $sql['id'];
									$cidade = $sql['cidade'];
									$uf = $sql['uf'];
									
									include("res_busca_cidade.php");
							
				 } 
			}
			
	function buscar_motoristas() 
			{
				$sql = "SELECT * FROM motoristas order by nome";
							$limite = mysql_query("$sql");
							$resultado = mysql_num_rows($limite);
						
                           	while  ($sql = mysql_fetch_array ($limite)) {
									$id_motorista = $sql['id'];
									$motoristas = $sql['nome'];
																		
									include("res_busca_motorista.php");
							
				 } 
			}
			function buscar_carro() 
			{
				$sql = "SELECT * FROM carro order by placa";
							$limite = mysql_query("$sql");
							$resultado = mysql_num_rows($limite);
						
                           	while  ($sql = mysql_fetch_array ($limite)) {
									$id_carro = $sql['id'];
									$placa = $sql['placa'];
									$carro = $sql['carro'];
																		
									include("res_busca_carro.php");
							
				 } 
			}				
?>