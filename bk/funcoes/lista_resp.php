 <?php
	include ("conectdb.php");
	//fun��o inverter data
	function inverteData($data){
    	if(count(explode("/",$data)) > 1){
   	     return implode("-",array_reverse(explode("/",$data)));
   		 }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    	}
	}// fim inverterdata
	
	function lista_tumulo_edita() {
							$codigo = $_POST['codigo'];
			 				$sql = "SELECT * FROM tumulo WHERE codigo = $codigo ORDER BY responsavel";
							$limite = mysql_query("$sql");
							$resultado = mysql_num_rows($limite);
                            
                            if ($resultado<=0){
                            echo "<div class=\"alert alert-danger alert-dismissable\">
							<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
								&times;
							</button>Nenhum registro encontrado.
						</div>";
                            }
                          
							while  ($sql = mysql_fetch_array ($limite)) {
									$cod = $sql['codigo'];
									$cpf = $sql['cpf'];
									$nome = $sql['responsavel'];
									$endereco = $sql['endereco'];
									$numero = $sql['numero'];
									$complemento = $sql['complemento'];
									$bairro = $sql['bairro'];
									$cidade = $sql['cidade'];
									$uf = $sql['uf'];
									$data_aquisicao = $sql['data_aquisicao'];
									$tipo = $sql['tipo'];
									$obs = $sql['obs'];
									$gaveta = $sql['gaveta'];
									
							}
	}
	function lista_proprietario() {
		require ("conectdb.php");
					 $sql = mysqli_query($conexao, "SELECT * FROM tumulo ORDER BY responsavel");
					
					while  ($dados = mysqli_fetch_assoc ($sql)) {
							$codigo = $dados['codigo'];
							$nome = $dados['responsavel'];
							echo "<option value=\"$nome\">";
							}

}							
	
	function lista_responsavel() {
				require ("conectdb.php");
			 				$sql = mysqli_query($conexao, "SELECT * FROM tumulo ORDER BY proprietario");
							
							while  ($dados = mysqli_fetch_assoc ($sql)) {
									$codigo = $dados['codigo'];
									$nome = $dados['proprietario'];
									echo "<option value=\"$nome\">";
									}
        
	}

	
	function lista_sepultado() {
				require ("conectdb.php");
			 				$sql = mysqli_query($conexao, "SELECT * FROM sep ORDER BY falecido");

							 while  ($dados = mysqli_fetch_assoc($sql)) {
									$codigo = $dados['cod_tumulo'];
									$nome = $dados['falecido'];
									echo "<option value=\"$nome\">";
									}
        
	}
		
	function lista_responsavel_tabela() {
							$nome = $_POST['buscanome'];
			 				$sql = "SELECT * FROM tumulo WHERE responsavel LIKE '$nome%' ORDER BY responsavel";
							$limite = mysql_query("$sql");
							$resultado = mysql_num_rows($limite);
                            
                            if ($resultado<=0){
                            echo "<div class=\"alert alert-danger alert-dismissable\">
							<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
								&times;
							</button>Nenhum registro encontrado.
						</div>";
                            }
                          
							while  ($sql = mysql_fetch_array ($limite)) {
									$cod = $sql['codigo'];
									$nome = $sql['responsavel'];
									$tipo = $sql['tipo'];
									$gaveta = $sql['gaveta'];
									
							echo "<p><strong>$cod - $nome</strong></p>
								<form action=\"sep.php\" method=\"post\">
										<input type=\"hidden\" name=\"codigo\" value=\"$cod\" />
										<input type=\"hidden\" name=\"tipo\" value=\"$tipo\" />
										<input type=\"hidden\" name=\"gaveta\" value=\"$gaveta\" />
											<button type=\"input\" name\"incluir_sep\" value=\"sep\" class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Incluir Sepultamento\">
												<i class=\"fa fa-plus-square fa-2x\"></i>
											</button>
									</form>
											<form action=\"edita_resp.php\" method=\"post\">
										<input type=\"hidden\" name=\"codigo\" value=\"$cod\" />
										<input type=\"hidden\" name=\"tipo\" value=\"$tipo\" />
										<input type=\"hidden\" name=\"gaveta\" value=\"$gaveta\" />
											<button type=\"input\" name\"incluir_sep\" value=\"sep\" class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Editar Respons�vel\">
												<i class=\"fa fa-edit fa-2x\"></i>
											</button>
									</form><br><br>";
									
							$sql_sep = "SELECT * FROM sep WHERE cod_tumulo = '$cod' ORDER BY falecido";
							$limite_sep = mysql_query("$sql_sep");
							$resultado_sep = mysql_num_rows($limite_sep);
                          
							while  ($sql_sep = mysql_fetch_array ($limite_sep)) {
									$id = $sql_sep['id'];
									$cod_tumulo = $sql_sep['cod_tumulo'];
									$nome_sep = $sql_sep['falecido'];
									$data_falec = inverteData($sql_sep['data_falec']);
									$data_sepult = inverteData($sql_sep['data_sepult']);
									$retirado = $sql_sep['retirado'];
									echo "<tr class=\"odd gradeX\">
                                            <td>$nome_sep</td>
											<td>$data_falec</td>
											<td>$data_sepult</td>
                                            <td>
									<form action=\"transf.php\" method=\"post\">
										<input type=\"hidden\" name=\"id\" value=\"$id\" />
										<input type=\"hidden\" name=\"nome\" value=\"$nome_sep\" />
										<input type=\"hidden\" name=\"cod_tumulo\" value=\"$cod_tumulo\" />
										<button type=\"input\" name\"incluir_sep\" value=\"sep\" class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Trasferir\">
												<i class=\"glyphicon glyphicon-share-alt\"></i>
											</button>
										
											
									</form>
									</td>
                                        </tr>";
									}
									
									}
							
							
        
	}
	
	function lista_sepultado_tabela() {
						//inicio busca codigo sepultado
						$nome = $_POST['sepultado'];
			 				$sql = "SELECT * FROM sep WHERE falecido LIKE '$nome%' ORDER BY falecido";
							$limite = mysql_query("$sql");
							$resultado = mysql_num_rows($limite);
                            
                            if ($resultado<=0){
                            echo "<div class=\"alert alert-danger alert-dismissable\">
							<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
								&times;
							</button>Nenhum registro encontrado.
						</div>";
                            }
                            
							while  ($sql = mysql_fetch_array ($limite)) {
									$cod = $sql['cod_tumulo'];
						//fim codigo sepultado
									
						//inicio busca codigo respons�vel				
						$query = "SELECT * FROM tumulo WHERE codigo = '$cod' ORDER BY responsavel";
								$limite_query = mysql_query("$query");
								$resultado = mysql_num_rows($limite_query);
                                  while  ($query = mysql_fetch_array ($limite_query)) {
										$cod = $query['codigo'];
										$nome = $query['responsavel'];
										$tipo = $query['tipo'];
										$gaveta = $query['gaveta'];
						//fim codigo do respons�vel
									
									echo "<p><strong>$cod - $nome</strong></p>
								<form action=\"sep.php\" method=\"post\">
										<input type=\"hidden\" name=\"codigo\" value=\"$cod\" />
										<input type=\"hidden\" name=\"tipo\" value=\"$tipo\" />
										<input type=\"hidden\" name=\"gaveta\" value=\"$gaveta\" />
											<button type=\"input\" name\"incluir_sep\" value=\"sep\" class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Incluir Sepultamento\">
												<i class=\"fa fa-plus-square fa-2x\"></i>
											</button>
									</form>
											<form action=\"edita_resp.php\" method=\"post\">
										<input type=\"hidden\" name=\"codigo\" value=\"$cod\" />
										<input type=\"hidden\" name=\"tipo\" value=\"$tipo\" />
										<input type=\"hidden\" name=\"gaveta\" value=\"$gaveta\" />
											<button type=\"input\" name\"incluir_sep\" value=\"sep\" class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Editar Respons�vel\">
												<i class=\"fa fa-edit fa-2x\"></i>
											</button>
									</form><br><br>";
							
							//inicio lista sepultados		
							$sql_sep = "SELECT * FROM sep WHERE cod_tumulo = '$cod' ORDER BY falecido";
							$limite_sep = mysql_query("$sql_sep");
							$resultado_sep = mysql_num_rows($limite_sep);
							while  ($sql_sep = mysql_fetch_array ($limite_sep)) {
									$id = $sql_sep['id'];
									$cod_tumulo = $sql_sep['cod_tumulo'];
									$nome_sep = $sql_sep['falecido'];
									$data_falec = inverteData($sql_sep['data_falec']);
									$data_sepult = inverteData($sql_sep['data_sepult']);
									$retirado = $sql_sep['retirado'];
									echo "<tr class=\"odd gradeX\">
                                            <td>$nome_sep</td>
											<td>$data_falec</td>
											<td>$data_sepult</td>
                                            <td>
									<form action=\"transf.php\" method=\"post\">
										<input type=\"hidden\" name=\"id\" value=\"$id\" />
										<input type=\"hidden\" name=\"nome\" value=\"$nome_sep\" />
										<input type=\"hidden\" name=\"cod_tumulo\" value=\"$cod_tumulo\" />
										<button type=\"input\" name\"incluir_sep\" value=\"sep\" class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Trasferir\">
												<i class=\"glyphicon glyphicon-share-alt\"></i>
											</button>
									</form>
									</td>
                                        </tr>";
							//fim lista sepultados
											}
									
										}

									}
	
							}
       function lista_tumulo_tabela() {
						$cod = $_POST['tumulo'];
			 				$sql = "SELECT * FROM tumulo WHERE codigo = '$cod' ORDER BY responsavel";
							$limite = mysql_query("$sql");
							$resultado = mysql_num_rows($limite);
                          
                           if ($resultado<=0){
                            echo "<div class=\"alert alert-danger alert-dismissable\">
							<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
								&times;
							</button>Nenhum registro encontrado.
						</div>";
                            }
                                                      
							while  ($sql = mysql_fetch_array ($limite)) {
									$cod = $sql['codigo'];
									$nome = $sql['responsavel'];
									$tipo = $sql['tipo'];
									$gaveta = $sql['gaveta'];
									
							echo "<p><strong>$cod - $nome</strong></p>
								<form action=\"sep.php\" method=\"post\">
										<input type=\"hidden\" name=\"codigo\" value=\"$cod\" />
										<input type=\"hidden\" name=\"tipo\" value=\"$tipo\" />
										<input type=\"hidden\" name=\"gaveta\" value=\"$gaveta\" />
											<button type=\"input\" name\"incluir_sep\" value=\"sep\" class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Incluir Sepultamento\">
												<i class=\"fa fa-plus-square fa-2x\"></i>
											</button>
									</form>
											<form action=\"edita_resp.php\" method=\"post\">
										<input type=\"hidden\" name=\"codigo\" value=\"$cod\" />
										<input type=\"hidden\" name=\"tipo\" value=\"$tipo\" />
										<input type=\"hidden\" name=\"gaveta\" value=\"$gaveta\" />
											<button type=\"input\" name\"incluir_sep\" value=\"sep\" class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Editar Respons�vel\">
												<i class=\"fa fa-edit fa-2x\"></i>
											</button>
									</form><br><br>";
									
							$sql_sep = "SELECT * FROM sep WHERE cod_tumulo = '$cod' ORDER BY falecido";
							$limite_sep = mysql_query("$sql_sep");
							$resultado_sep = mysql_num_rows($limite_sep);
                           
							while  ($sql_sep = mysql_fetch_array ($limite_sep)) {
									$id = $sql_sep['id'];
									$cod_tumulo = $sql_sep['cod_tumulo'];
									$nome_sep = $sql_sep['falecido'];
									$data_falec = inverteData($sql_sep['data_falec']);
									$data_sepult = inverteData($sql_sep['data_sepult']);
									$retirado = $sql_sep['retirado'];
									echo "<tr class=\"odd gradeX\">
                                            <td>$nome_sep</td>
											<td>$data_falec</td>
											<td>$data_sepult</td>
                                            <td>
									<form action=\"transf.php\" method=\"post\">
										<input type=\"hidden\" name=\"id\" value=\"$id\" />
										<input type=\"hidden\" name=\"nome\" value=\"$nome_sep\" />
										<input type=\"hidden\" name=\"cod_tumulo\" value=\"$cod_tumulo\" />
										<button type=\"input\" name\"incluir_sep\" value=\"sep\" class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Trasferir\">
												<i class=\"glyphicon glyphicon-share-alt\"></i>
											</button>
									</form>
										</td>
                                        </tr>";
									}
									
							}
                   
                       
                    
							
							
        
	}
?>