<?php
function fechamento_mensal() {
		require ("conectdb.php");

				$sql = mysqli_query($conexao, "SELECT * FROM cadastro where ativo='S'");
				$data = $_POST['data'];						
						while  ($dados = mysqli_fetch_assoc($sql)) {
							$id = $dados['id'];
							$codigo = $dados['cod_tributos'];							
								$inserir = mysqli_query($conexao, "INSERT INTO mensal VALUES ('', '$codigo', '$data')");
					}
					
}
?>