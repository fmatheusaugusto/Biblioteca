                                    <table>
										<tr>
											<th>
												<form action="cad_sepultamento.php" method="post">
													<input type="hidden" name="cod_tumulo" value="<?php echo $codigo; ?>" />
													<button type="input" name="mostrar" value="mostrar" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Mostrar Resultados">
													<i class="icon-prepend fa fa-plus-square"></i> Incluir
														</button>
												</form>
											</th>
											<th>
												<form action="edita_proprietario.php" method="post">
												<input type="hidden" name="cod_tumulo" value="<?php echo $codigo; ?>" />
													<button type="input" name="exibe" value="exibe" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Editar dados de Cadastro">
													<i class="icon-prepend fa fa-plus-square"></i> Editar
														</button>
												</form>
											</th>
								
										</tr>
									</table>