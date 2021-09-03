					<tr>
                            <td><?php echo "$nome"; ?></td>
							<td><?php echo "$codigo"; ?></td>					
							<td><form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
									<input type="hidden" name = "acao" value="valor">
									<input type="hidden" name = "id" value="<?php echo "$id"; ?>">
									<input type="text" name="valor" onKeyUp="mascaraMoeda(this, event)" value="<?php echo "$valor_certo"; ?>">
									<button type="submit" class="btn btn-labeled btn-success">
										<span class="btn-label">
										<i class="fa fa-check"></i></span></>
									</button>
								</form></td>							
					</tr>
