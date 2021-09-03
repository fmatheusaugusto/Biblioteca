					<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="checkout-form" class="smart-form" novalidate>
					           <input type="hidden" name="id" value="<?php echo $id;?>">
                                    
									<fieldset>
									 	<div class="row">
											<section class="col col-2">
											<label class="label">Código</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="codigo" value="<?php echo $codigo; ?>" placeholder="Código(Apenas Números)" autofocus>
												</label>
											</section>
                                            <section class="col col-2">
											<label class="label">CPF</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="number" value="<?php echo $cpf; ?>" min="0" max="99999999999" maxlength="11" name="cpf" placeholder="CPF">
												</label>
											</section>
											<section class="col col-5">
											<label class="label">Proprietário</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" value="<?php echo $nome; ?>" name="nome" placeholder="Nome">
												</label>
											</section>
										</div>

										<div class="row">
											<section class="col col-3">
											<label class="label">Endereço</label>
												<label class="input"> <i class="icon-prepend fa fa-building-o"></i>
													<input type="text" value="<?php echo $endereco; ?>" name="endereco" placeholder="Endereço">
												</label>
											</section>
											<section class="col col-2">
											<label class="label">Número</label>
												<label class="input"> <i class="icon-prepend fa fa-sort-numeric-asc"></i>
													<input type="number" value="<?php echo $numero; ?>" min="0" max="9999" name="numero" >
												</label>
											</section>
											<section class="col col-2">
											<label class="label">Bairro</label>
												<label class="input"> <i class="icon-prepend fa fa-building"></i>
													<input type="text" value="<?php echo $bairro; ?>" name="bairro" placeholder="Bairro">
												</label>
                                            </section>
                                        </div>
                                        <div class="row">
											<section class="col col-4">
											<label class="label">Cidade</label>
												<label class="input"> <i class="icon-prepend fa fa-building"></i>
													<input type="text" value="<?php echo $cidade; ?>" name="cidade"  placeholder="Cidade">
												</label>
											</section>
											<section class="col col-2">
											<label class="label">Estado</label>
												<label class="select"> 
													<select name="uf">
															<option value="0" <?php if($uf==""){echo "disabled";}?>>Estado</option>
															<option value="AC" <?php if($uf=="AC"){echo "selected";}?>>Acre</option>
															<option value="AL"<?php if($uf=="AL"){echo "selected";}?>>Alagoas</option>
															<option value="AP"<?php if($uf=="AP"){echo "selected";}?>>Amapá</option>
															<option value="AM"<?php if($uf=="AM"){echo "selected";}?>>Amazonas</option>
															<option value="BA"<?php if($uf=="BA"){echo "selected";}?>>Bahia</option>
															<option value="CE"<?php if($uf=="CE"){echo "selected";}?>>Ceará</option>
															<option value="DF"<?php if($uf=="DF"){echo "selected";}?>>Distrito Federal</option>
															<option value="ES"<?php if($uf=="ES"){echo "selected";}?>>Espírito Santo</option>
															<option value="GO"<?php if($uf=="GO"){echo "selected";}?>>Goiás</option>
															<option value="MA"<?php if($uf=="MA"){echo "selected";}?>>Maranhão</option>
															<option value="MT"<?php if($uf=="MT"){echo "selected";}?>>Mato Grosso</option>
															<option value="MS"<?php if($uf=="MS"){echo "selected";}?>>Mato Grosso do Sul</option>
															<option value="MG"<?php if($uf=="MG"){echo "selected";}?>>Minas Gerais</option>
															<option value="PA"<?php if($uf=="PA"){echo "selected";}?>>Pará</option>
															<option value="PB"<?php if($uf=="PB"){echo "selected";}?>>Paraíba</option>
															<option value="PR"<?php if($uf=="PR"){echo "selected";}?>>Paraná</option>
															<option value="PE"<?php if($uf=="PE"){echo "selected";}?>>Pernambuco</option>
															<option value="PI"<?php if($uf=="PI"){echo "selected";}?>>Piauí</option>
															<option value="RJ"<?php if($uf=="RJ"){echo "selected";}?>>Rio de Janeiro</option>
															<option value="RN"<?php if($uf=="RN"){echo "selected";}?>>Rio Grande do Norte</option>
															<option value="RS"<?php if($uf=="RS"){echo "selected";}?>>Rio Grande do Sul</option>
															<option value="RO"<?php if($uf=="RO"){echo "selected";}?>>Rondônia</option>
															<option value="RR"<?php if($uf=="RR"){echo "selected";}?>>Roraima</option>
															<option value="SC"<?php if($uf=="SC"){echo "selected";}?>>Santa Catarina</option>
															<option value="SP"<?php if($uf=="SP"){echo "selected";}?>>São Paulo</option>
															<option value="SE"<?php if($uf=="SE"){echo "selected";}?>>Sergipe</option>
															<option value="TO"<?php if($uf=="TO"){echo "selected";}?>>Tocantins</option>
													</select>
                                                    <i></i>
												</label>
											</section>
										</div>
                                        <div class="row">
										<section class="col col-2">
											<label class="label">Data de Aquisição</label>
												<label class="input"> <i class="icon-prepend fa fa-calendar"></i>
													<input type="date" value="<?php echo $aquisicao; ?>" name="aquisicao">
												</label>
											</section>
											<section class="col col-3">
											<label class="label">Responsável</label>
												<label class="input"> <i class="icon-prepend fa fa fa-user"></i>
													<input type="text" value="<?php echo $proprietario; ?>" name="proprietario" placeholder="Proprietário">
												</label>
											</section>
											</div>
											<div class="row">
											<section class="col col-2">
											<label class="label">Tipo</label>
												<label class="select"> 
													<select name="tipo">
															
                                                            <option value="CR" <?php if ($tipo=="CR"){ echo "selected";} ?>>Conjugado ao muro</option>
                                                            <option value="Simples" <?php if ($tipo=="SIMPLES"){ echo "selected";} ?>>Simples</option>
                                                            <option value="Duplo" <?php if ($tipo=="DUPLO"){ echo "selected";} ?>>Duplo</option>
                                                            <option value="Triplo" <?php if ($tipo=="TRIPLO"){ echo "selected";} ?>>Triplo</option>
															<option value="Galeria"<?php if($tipo=="GALERIA"){echo "selected";}?>>Galeria</option>
															<option value="JAZIGO"<?php if($tipo=="JAZIGO"){echo "selected";}?>>JAZIGO</option>
															<option value="INFANTIL"<?php if($tipo=="INFANTIL"){echo "selected";}?>>INFANTIL</option>
															<option value="CAPELA"<?php if($tipo=="CAPELA"){echo "selected";}?>>CAPELA</option>
													</select>
                                                    <i></i>
												</label>
											</section>
											<section class="col col-2">
											<label class="label">Gavetas</label>
												<label class="input"> <i class="icon-prepend fa fa-sort-numeric-asc"></i>
													<input type="number" value="<?php echo $gaveta; ?>"  name="gaveta"  placeholder="Gaveta (Número)">
												</label>
											</section>
											<section class="col col-2">
											<label class="label">Gavetas Vagas</label>
												<label class="input"> <i class="icon-prepend fa fa-sort-numeric-asc"></i>
													<input type="number" value="<?php echo $vagas; ?>" name="vagas"  placeholder="Gaveta (Vagas)">
												</label>
											</section>
											<section class="col col-2">
											<label class="label">Gaveta Execução</label>
												<label class="input"> <i class="icon-prepend fa fa-sort-numeric-asc"></i>
													<input type="number" value="<?php echo $execucao; ?>"  name="execucao"  placeholder="Gaveta (Execução)">
												</label>
											</section>
										</div>
										<div class="row">
											<section class="col col-4">
											<label class="label">Observação</label>
												<label class="input"> <i class="icon-prepend fa fa-comment-o"></i>
													<input type="text" value="<?php echo $obs; ?>" name="obs" placeholder="Observação">
												</label>
											</section>
											<section class="col col-2">
											<label class="label">Contato</label>
												<label class="input"> <i class="icon-prepend fa fa-phone"></i>
													<input type="text" value="<?php echo $contato; ?>" name="contato" placeholder="Contato" data-mask="(99)99999-9999">
												</label>
											</section>
										</div>
									</fieldset>

									<fieldset>
										<div class="row">
											
										</div>

									</fieldset>

									<footer>
										<button type="submit" name="editar" value="editar" class="btn btn-primary">
											Salvar
										</button>
									</footer>
								</form>