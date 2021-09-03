<!-- recebe dados (funcoes/editar.php pesquisa_empresa()-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="checkout-form" class="smart-form" >
								<input type="hidden" name="id" value="<?php echo "$id"; ?>">
									<fieldset>
									 	<div class="row">
											<section class="col col-2">
											<label class="label">Código Tributos</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="codigo" value="<?php echo "$codigo"; ?>" autofocus>
												</label>
											</section>
                                            <section class="col col-2">
											<label class="label">CPF/CNPJ</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="number" min="0" max="99999999999" maxlength="14" name="cpf"  value="<?php echo $documento; ?>">
												</label>
											</section>
										</div>
										<div class="row">
											<section class="col col-4">
											<label class="label">Empresa</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="empresa"  value="<?php echo "$nome"; ?>">
												</label>
											</section>
											<section class="col col-4">
											<label class="label">Responsável</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="responsavel" value="<?php echo "$responsavel"; ?>">
												</label>
											</section>
										</div>
										<div class="row">
											<section class="col col-3">
											<label class="label">Endereço</label>
												<label class="input"> <i class="icon-prepend fa fa-building-o"></i>
													<input type="text" name="endereco" value="<?php echo "$endereco"; ?>">
												</label>
											</section>																	                                   																									
											<section class="col col-2">
											<label class="label">Contato</label>
												<label class="input"> <i class="icon-prepend fa fa-phone"></i>
													<input type="text" name="contato" value="<?php echo "$contato"; ?>" data-mask="(99)99999-9999">
												</label>
											</section>
											<section class="col col-2">
											<label class="label">email</label>
												<label class="input"> <i class="icon-prepend fa fa-phone"></i>
													<input type="email" name="email" value="<?php echo "$email"; ?>">
												</label>
											</section>
										</div>										
									</fieldset>

									<fieldset>
										<div class="row">
											
										</div>

									</fieldset>

									<footer>
										<button type="submit" name="alterar" value="editar" class="btn btn-primary">
											Editar
										</button>
									</footer>
								</form>