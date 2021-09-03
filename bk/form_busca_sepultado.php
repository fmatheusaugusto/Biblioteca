<form method="post" action="res_busca_sepultado.php" id="checkout-form" class="smart-form" novalidate>
									<fieldset>
									 <div class="row">
                                     <section class="col col-5">
											<label class="label">Sepultado</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input list="nome" type="text" name="nome" placeholder="Nome">
													<datalist id="nome">
														<?php	
															include("funcoes/lista_resp.php");
																	lista_sepultado();
														?>
													</datalist>
												</label>
											</section>
										</div>
									</fieldset>
									<fieldset>
										<div class="row">
										</div>
                                    </fieldset>
                                    <footer>
										<button type="submit" name="pesquisar" value="pesquisar" class="btn btn-primary">
                                        Pesquisar
										</button>
									</footer>
								</form>