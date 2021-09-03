<?php
require ("conectdb.php");
//função inverter data
	function inverteData($data){
			if(count(explode("/",$data)) > 1){
				return implode("-",array_reverse(explode("/",$data)));
				}elseif(count(explode("-",$data)) > 1){
			return implode("/",array_reverse(explode("-",$data)));
			}
		}// fim inverterdata

    function lista_resp_sep() {
		 				$sql = "SELECT * FROM sep ORDER BY falecido";
							$limite = mysql_query("$sql");
							
							while  ($sql = mysql_fetch_array ($limite)) {
								$codigo = $sql['cod_tumulo'];
                                $falecido = $sql['falecido'];
						
                            echo "<p><h6>".$codigo. "-" .$falecido."</h6></p>";

                            $query="SELECT * FROM tumulo WHERE responsavel LIKE '%$falecido%%'";
                                $limite_resp = mysql_query("$query");
                                    
                                    while  ($query = mysql_fetch_array ($limite_resp)) {
                                        $codigo = $query['codigo'];
                                        $resp = $query['responsavel'];
                                    echo "<h6>Resultado: "."$codigo"."-"."$resp"."</h6><br>";
                                }
                                													
                        }
                        
                       
    }
    lista_resp_sep();
?>