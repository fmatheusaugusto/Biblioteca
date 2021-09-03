<?php

//função inverter data
	function inverteData($data){
			if(count(explode("/",$data)) > 1){
				return implode("-",array_reverse(explode("/",$data)));
				}elseif(count(explode("-",$data)) > 1){
			return implode("/",array_reverse(explode("-",$data)));
			}
		}// fim inverterdata

		function teste_pdf() {
			require ("conectdb.php");

					$sql = mysqli_query($conexao, "SELECT * FROM cadastro ORDER BY 'nome'");
							
							while  ($dados = mysqli_fetch_assoc($sql)) {
								
								$nome = $dados['nome'];
								
								echo "<p> $nome </p>"; 
						}
						
	}
	function lista_cadastro() {
			require ("conectdb.php");

					$sql = mysqli_query($conexao, "SELECT * FROM cadastro ORDER BY 'nome'");
							
							while  ($dados = mysqli_fetch_assoc($sql)) {
								$id = $dados['id'];
								$codigo = $dados['cod_tributos'];
								$nome = $dados['nome'];
								$responsavel = $dados['responsavel'];
								$contato = $dados['contato'];
								$valor = $dados['valor'];
								$nota_fiscal = $dados['nota_fiscal'];
								$ativo = $dados['ativo'];
								
								$valor_certo = str_replace(".",",",$valor);

								if($ativo=="S"){
									$situacao = "fa-check";
									$botao = "btn-success";
									$texto = "SIM";
								} else{
									$situacao = "fa-remove";
									$botao = "btn-danger";
									$texto = "NÃO";
								}
			
								if($nota_fiscal=="S"){
									$situacao_nf = "fa-check";
									$botao_nf = "btn-success";
									$texto_nf = "SIM";
								} else{
									$situacao_nf = "fa-remove";
									$botao_nf = "btn-danger";
									$texto_nf = "NÃO";
								}

							require("resultado_pesquisa.php");
						}
						
	}

	function pesquisa_empresa() {
		require ("conectdb.php");
				$codigo = $_POST['codigo'];
				$sql = mysqli_query($conexao, "SELECT * FROM cadastro where id = '$codigo'");
						
						while  ($dados = mysqli_fetch_assoc($sql)) {
							$id = $dados['id'];
							$codigo = $dados['cod_tributos'];
							$documento = $dados['documento'];
							$nome = $dados['nome'];
							$responsavel = $dados['responsavel'];
							$endereco = $dados['endereco'];
							$email = $dados['email'];
							$contato = $dados['contato'];
							$valor = $dados['valor'];
							$nota_fiscal = $dados['nota_fiscal'];
							$ativo = $dados['ativo'];
							
							$valor_certo = str_replace(".",",",$valor);
							include("form_edita_empresa.php");					
					}
					
}
	
	function lista_cadastro_valor() {
		require ("conectdb.php");

				$sql = mysqli_query($conexao, "SELECT * FROM cadastro ORDER BY 'nome'");
						
						while  ($dados = mysqli_fetch_assoc($sql)) {
							$id = $dados['id'];
							$codigo = $dados['cod_tributos'];
							$nome = $dados['nome'];
							$responsavel = $dados['responsavel'];
							$contato = $dados['contato'];
							$valor = $dados['valor'];
							$nota_fiscal = $dados['nota_fiscal'];
							$ativo = $dados['ativo'];

							$valor_certo = str_replace(".",",",$valor);
							
													
						require("resultado_pesquisa_valor.php");
					}
					
}

function mensal() {
	require ("conectdb.php");
			$sql = mysqli_query($conexao, "SELECT * FROM mensal where data = '2021-08-31' ORDER BY cod_tributos");
					while  ($dados = mysqli_fetch_assoc($sql)) {
							$codigo = $dados['cod_tributos'];								
							$busca = mysqli_query($conexao, "SELECT * FROM cadastro where cod_tributos = '$codigo' ORDER BY nome");
								while  ($res = mysqli_fetch_assoc($busca)) {
									echo $res['nome']."<br>";
								}
				}
				
}

?>