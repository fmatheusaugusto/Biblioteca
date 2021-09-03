					<tr>
                            <td><?php echo "$nome"; ?></td>
							<td><?php echo "$codigo"; ?></td>
							<td><?php echo "$responsavel"; ?></td>
							<td align = "center">
								<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
									<input type="hidden" name = "acao" value="valor">
									<input type="hidden" name = "id" value="<?php echo "$id"; ?>">
									<input type="text" name="valor" size="5" onKeyUp="mascaraMoeda(this, event)" value="<?php echo "$valor_certo"; ?>">
									<button type="submit" class="btn btn-primary">										
										<i class="fa fa-check"></i></>
									</button>
								</form>
							</td>
							<td align = "center">
								<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
									<input type="hidden" name = "acao" value="nota_fiscal">
									<input type="hidden" name = "id" value="<?php echo "$id"; ?>">
									<input type="hidden" name = "nota_fiscal" value="<?php echo "$nota_fiscal"; ?>">
									<button type="submit" class="btn btn-labeled <?php echo "$botao_nf"; ?>">
										<span class="btn-label">
										<i class="fa <?php echo "$situacao_nf"; ?>"></i></span><?php echo " $texto_nf"; ?></>
									</button>
								</form>
							</td>			
							<td align = "center">
								<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
									<input type="hidden" name = "acao" value="ativo">
									<input type="hidden" name = "id" value="<?php echo "$id"; ?>">
									<input type="hidden" name = "ativo" value="<?php echo "$ativo"; ?>">
									<button type="submit" class="btn btn-labeled <?php echo "$botao"; ?>">
										<span class="btn-label">
										<i class="fa <?php echo "$situacao"; ?>"></i></span><?php echo " $texto"; ?></>
									</button>
								</form>
							</td>
							<td align = "center">
								<form method="post" action="edita_empresa.php">
									<input type="hidden" name="editar">
									<input type="hidden" name = "codigo" value="<?php echo "$id"; ?>">									
									<button type="submit" class="btn btn-labeled btn-warning">										
										<span class="btn-label"><i class="fa fa-check-square-o"></i></span>Editar</a>
									</button>
								</form>
							</td>
					</tr>
