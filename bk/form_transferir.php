							<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="checkout-form" class="smart-form" novalidate>
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                    <input type="hidden" name="codigo_de" value="<?php echo $codigo;?>">
									<fieldset>
									 <div class="row">
                                        <section class="col col-2">
											<label class="label">Transferir de <?php echo "<b>".$codigo."</b>";?> para:</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="codigo_para"  placeholder="Código(Apenas Números)" autofocus>
												</label>
                                        </section>
                                        <section class="col col-2">
											<label class="label">Data</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="date" name="data_transf"  placeholder="Data da Transferência" autofocus>
												</label>
										</section>
									</fieldset>

									<fieldset>
										<div class="row">
											
										</div>

									</fieldset>
                                    <footer>
										<button type="submit" name="transferir" value="transferir" class="btn btn-primary">
                                        Transferir
										</button>
									</footer>
									
								</form>