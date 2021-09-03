<?php
date_default_timezone_set("America/Sao_Paulo");
include("conectdb.php");
	function inserir_paciente() 
			{
				@$cpf = $_POST['cpf'];
				@$sus = $_POST['sus'];
				@$nome = $_POST['nome'];
				@$datanasc = $_POST['datanasc'];
				@$endereco = $_POST['endereco'];
				@$numero = $_POST['numero'];
				@$bairro = $_POST['bairro'];
				@$cidade = $_POST['cidade'];
				@$uf = $_POST['uf'];
				@$contato = $_POST['contato'];
																	
				$inserir = mysql_query("INSERT INTO pacientes VALUES ('','$cpf', '$sus', UCASE('$nome'), '$datanasc', UCASE('$endereco'), '$numero', UCASE('$bairro'), UCASE('$cidade'), UCASE('$uf'),'$contato')");
				
				if ($inserir){
				  echo "<div class=\"alert alert-success alert-dismissable\">
							<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
								&times;
							</button>Paciente cadastrado com sucesso.<br/>
							
                                    
						</div>";
                         } else {
								echo "erro: ".mysql_error();
									}
			}

	function inserir_cidade() 
			{
				@$cidade = $_POST['cidade'];
				@$uf = $_POST['uf'];
				@$media_km = $_POST['media_km'];
																	
				$inserir = mysql_query("INSERT INTO cidade VALUES ('',UCASE('$cidade'), UCASE('$uf'), '$media_km')");
				
				if ($inserir){
				  echo "<div class=\"alert alert-success alert-dismissable\">
							<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
								&times;
							</button>Cidade cadastrado com sucesso.<br/>
							
                                    
						</div>";
                         } else {
								echo "erro: ".mysql_error();
									}
			}
			
	function inserir_motorista() 
			{
				@$cnh = $_POST['cnh'];
				@$nome = $_POST['nome'];
				@$data_venc = $_POST['data_venc'];
																	
				$inserir = mysql_query("INSERT INTO motoristas VALUES ('',UCASE('$cnh'), UCASE('$nome'), '$data_venc')");
				
				if ($inserir){
				  echo "<div class=\"alert alert-success alert-dismissable\">
							<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
								&times;
							</button>Motorista cadastrado com sucesso.<br/>
							
                                    
						</div>";
                         } else {
								echo "erro: ".mysql_error();
									}
			}
		
?>