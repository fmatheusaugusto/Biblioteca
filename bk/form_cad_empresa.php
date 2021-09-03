<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="checkout-form" class="smart-form" >
									<fieldset>
									 	<div class="row">
											<section class="col col-2">
											<label class="label">Código Tributos</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="codigo" placeholder="Código(Apenas Números)" autofocus>
												</label>
											</section>
                                            <section class="col col-2">
											<label class="label">CPF/CNPJ</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="number" min="0" max="99999999999" maxlength="14" name="cpf" placeholder="CPF">
												</label>
											</section>
										</div>
										<div class="row">
											<section class="col col-4">
											<label class="label">Empresa</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="empresa" placeholder="Empresa">
												</label>
											</section>
											<section class="col col-4">
											<label class="label">Responsável</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="responsavel" placeholder="Responsavel">
												</label>
											</section>
										</div>
										<div class="row">
											<section class="col col-3">
											<label class="label">Endereço</label>
												<label class="input"> <i class="icon-prepend fa fa-building-o"></i>
													<input type="text" name="endereco" placeholder="Endereço">
												</label>
											</section>																	                                   																									
											<section class="col col-2">
											<label class="label">Contato</label>
												<label class="input"> <i class="icon-prepend fa fa-phone"></i>
													<input type="text" name="contato" placeholder="Contato" data-mask="(99)99999-9999">
												</label>
											</section>
											<section class="col col-2">
											<label class="label">email</label>
												<label class="input"> <i class="icon-prepend fa fa-phone"></i>
													<input type="email" name="email" placeholder="email">
												</label>
											</section>
										</div>
										<div class="row">
											<section class="col col-2">
											<label class="label">Valor da Propaganda</label>
												<label class="input"> <i class="icon-prepend fa fa-building-o"></i>
													<input type="text" name="valor" onKeyUp="mascaraMoeda(this, event)" placeholder="valor">
												</label>
											</section>																	                                   																									
											<section class="col col-1">
											<label class="label">Emissão NF</label>
												<label class="select"> <i></i>
													<select name="nf">
															<option value="0" selected="" disabled="">Ativo</option>
															<option value="S">Sim</option>
															<option value="N">Não</option>
													</select>
                                                    
												</label>
											</section>
											<section class="col col-2">
											<label class="label">Periodo até</label>
												<label class="input"> <i class="icon-prepend fa fa-phone"></i>
													<input type="date" name="periodo">
												</label>
											</section>
											<section class="col col-1">
											<label class="label">Ativo</label>
												<label class="select"> <i></i>
													<select name="ativo">
															<option value="0" selected="" disabled="">Ativo</option>
															<option value="S">Sim</option>
															<option value="N">Não</option>
													</select>
                                                    
												</label>
											</section>
										</div>
									</fieldset>

									<fieldset>
										<div class="row">
											
										</div>

									</fieldset>

									<footer>
										<button type="submit" name="inserir" value="cadastrar" class="btn btn-primary">
											Salvar
										</button>
									</footer>
								</form>