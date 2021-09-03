<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Pacientes";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["cadastro"]["sub"]["paciente"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs["Cadastro"] = "";
		include("inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">


	<!-- widget grid -->
		<section id="widget-grid" class="">


			<!-- START ROW -->

			<div class="row">

				<!-- NEW COL START -->
				<article class="col-sm-12">
					
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-1" data-widget-deletebutton="false" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
						<!-- widget options:
							usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
							
							data-widget-colorbutton="false"	
							data-widget-editbutton="false"
							data-widget-togglebutton="false"
							data-widget-deletebutton="false"
							data-widget-fullscreenbutton="false"
							data-widget-custombutton="false"
							data-widget-collapsed="true" 
							data-widget-sortable="false"
							
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
							<h2>Cadastro de Pacientes </h2>				
							
						</header>

						<!-- widget div-->
						<div>
							
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
								
							</div>
							<!-- end widget edit box -->
							
							<!-- widget content -->
							<div class="widget-body">
								<?php 
									@$acao = $_POST['inserir'];
									if ($acao=="pacientes"){
										include("funcoes/inserir.php");
										inserir_paciente();
									}
								?>
								<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="checkout-form" class="smart-form" novalidate>
									<fieldset>
									 	<div class="row">
											<section class="col col-2">
											<label class="label">Documento</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="doc" placeholder="Documento(Apenas Números)" autofocus>
												</label>
											</section>
                                            <section class="col col-2">
											<label class="label">Cartão SUS</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="number" maxlength="15" name="sus" placeholder="Cartão SUS">
												</label>
											</section>
											<section class="col col-5">
											<label class="label">Nome</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="nome" placeholder="Nome">
												</label>
											</section>
											<section class="col col-3">
											<label class="label">Data de Nascimento</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="date" name="datanasc">
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
											<label class="label">Número</label>
												<label class="input"> <i class="icon-prepend fa fa-sort-numeric-asc"></i>
													<input type="number" name="numero" placeholder="numero">
												</label>
											</section>
											<section class="col col-2">
											<label class="label">Bairro</label>
												<label class="input"> <i class="icon-prepend fa fa-building"></i>
													<input type="text" name="bairro" placeholder="Bairro">
												</label>
											</section>
											<section class="col col-3">
											<label class="label">Cidade</label>
												<label class="input"> <i class="icon-prepend fa fa-building"></i>
													<input type="text" name="cidade" placeholder="Cidade">
												</label>
											</section>
											<section class="col col-2">
											<label class="label">Estado</label>
												<label class="select"> 
													<select name="uf">
															<option value="0" selected="" disabled="">Estado</option>
															<option value="AC">Acre</option>
															<option value="AL">Alagoas</option>
															<option value="AP">Amapá</option>
															<option value="AM">Amazonas</option>
															<option value="BA">Bahia</option>
															<option value="CE">Ceará</option>
															<option value="DF">Distrito Federal</option>
															<option value="ES">Espírito Santo</option>
															<option value="GO">Goiás</option>
															<option value="MA">Maranhão</option>
															<option value="MT">Mato Grosso</option>
															<option value="MS">Mato Grosso do Sul</option>
															<option value="MG">Minas Gerais</option>
															<option value="PA">Pará</option>
															<option value="PB">Paraíba</option>
															<option value="PR">Paraná</option>
															<option value="PE">Pernambuco</option>
															<option value="PI">Piauí</option>
															<option value="RJ">Rio de Janeiro</option>
															<option value="RN">Rio Grande do Norte</option>
															<option value="RS">Rio Grande do Sul</option>
															<option value="RO">Rondônia</option>
															<option value="RR">Roraima</option>
															<option value="SC">Santa Catarina</option>
															<option value="SP">São Paulo</option>
															<option value="SE">Sergipe</option>
															<option value="TO">Tocantins</option>
													</select>
                                                    <i></i>
												</label>
											</section>
										</div>
                                        <div class="row">
											<section class="col col-2">
											<label class="label">Contato</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="contato" placeholder="Contato" autofocus data-mask="(99)99999-9999">
												</label>
											</section>
										</div>
									</fieldset>

									<fieldset>
										<div class="row">
											
										</div>

									</fieldset>

									<footer>
										<button type="submit" name="inserir" value="pacientes" class="btn btn-primary">
											Salvar
										</button>
									</footer>
								</form>

							</div>
							<!-- end widget content -->
							
						</div>
						<!-- end widget div -->
						
					</div>
					<!-- end widget -->
					
					<!-- Widget ID (each widget will need unique ID)--><!-- end widget -->				

					<!-- Widget ID (each widget will need unique ID)-->
					

				</article>
				<!-- END COL -->
			</div>

			<!-- END ROW -->

		</section>
		<!-- end widget grid -->

	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->
<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE FOOTER -->
<?php
	// include page footer
	include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->

<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>

<!-- PAGE RELATED PLUGIN(S) -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/jquery-form/jquery-form.min.js"></script>


<script type="text/javascript">

	$(document).ready(function() {

		var $checkoutForm = $('#checkout-form').validate({
		// Rules for form validation
			rules : {
				doc : {
					required : true
				},
				sus : {
					required : true
				},
				nome : {
					required : true
				},
				numero : {
					required : true
				},
				bairro : {
					required : true
				},
				cidade : {
					required : true
				},
				endereco : {
					required : true
				},
				datanasc : {
					required : true,
					date : true
				},
				uf : {
					required : true
				},
				contato : {
					required : true,
				},
				address : {
					required : true
				},
				name : {
					required : true
				},
				card : {
					required : true,
					creditcard : true
				},
				cvv : {
					required : true,
					digits : true
				},
				month : {
					required : true
				},
				year : {
					required : true,
					digits : true
				}
			},

			// Messages for form validation
			messages : {
				doc : {
					required : 'Digite o número do CPF ou RG'
				},
				sus : {
					required : 'Digite o número do cartão do SUS'
				},
				nome : {
					required : 'Digite o nome do paciente'
				},
				endereco : {
					required : 'Digite o endereço do paciente'
				},
				
				numero : {
					required : 'Digite o número'
				},
				bairro : {
					required : 'Digite o bairro'
				},
				cidade : {
					required : 'Digite a cidade'
				},
			
				datanasc : {
					required : 'Preencha a data de nascimento'
				},
				uf : {
					required : 'Escolha um Estado'
				},
				contato : {
					required : 'Digite um contato'
				},
				name : {
					required : 'Please enter name on your card'
				},
				card : {
					required : 'Please enter your card number'
				},
				cvv : {
					required : 'Enter CVV2',
					digits : 'Digits only'
				},
				month : {
					required : 'Select month'
				},
				year : {
					required : 'Enter year',
					digits : 'Digits only please'
				}
			},

			// Do not change code below
			errorPlacement : function(error, element) {
				error.insertAfter(element.parent());
			}
		});
		//FUNÇÃO JANELA
		

		// START AND FINISH DATE
		$('#startdate').datepicker({
			dateFormat : 'dd.mm.yy',
			prevText : '<i class="fa fa-chevron-left"></i>',
			nextText : '<i class="fa fa-chevron-right"></i>',
			onSelect : function(selectedDate) {
				$('#finishdate').datepicker('option', 'minDate', selectedDate);
			}
		});
		
		$('#finishdate').datepicker({
			dateFormat : 'dd.mm.yy',
			prevText : '<i class="fa fa-chevron-left"></i>',
			nextText : '<i class="fa fa-chevron-right"></i>',
			onSelect : function(selectedDate) {
				$('#startdate').datepicker('option', 'maxDate', selectedDate);
			}
		});



	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>