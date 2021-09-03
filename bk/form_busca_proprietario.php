<form method="post" action="res_busca_proprietario.php" id="checkout-form" class="smart-form" novalidate>
									<fieldset>
									 <div class="row">
                                     <section class="col col-5">
											<label class="label">Proprietário</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" list="nome"  name="nome" placeholder="Nome" autocomplete="off" autofocus>
													<datalist id="nome">
														<?php	
															include("funcoes/lista_resp.php");
																	lista_proprietario();
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