<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Cadastro de Viagens";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["movimentacao"]["sub"]["viagens"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs["Movimentação"] = "";
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
							<h2>Cadastro de Viagens </h2>				
							
						</header>

						<!-- widget div-->
						<div>
							
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
								
							</div>
							<!-- end widget edit box -->
							
							<!-- widget content -->
							<div class="widget-body no-padding">
						       <?php 
									@$id = $_POST['id'];
									@$doc = $_POST['doc'];
									@$nome = $_POST['nome']; 
								?>
                                <div class="row">
										<div class="col-sm-9">
											<address>
												<strong>
                                                	<h4 style="padding:5px 0 0 20px; font-weight:bold">
														<?php if(isset($_POST['id'])){
													 		echo $doc." - ". $nome; 
														}
														?>
                                                        
                                                     </h4>
                                                </strong>												
											</address>
										</div>
									</div>
                               <?php 
									@$acao = $_POST['inserir'];
									if ($acao=="viagens"){
										include("funcoes/inserir.php");
										inserir_viagens();
									}
								?>
								<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="checkout-form" class="smart-form" novalidate>
                                
									<fieldset>
									 	<div class="row">
											<section class="col col-2">
											<label class="label">Cidade destino</label>
												<label class="select"> 
                                                	<!--Campo hidden para id_paciente-->
                                                	<input type="hidden" name="paciente" value="<?php echo $id; ?>">
                                                    <!--Campo hidden para id_paciente-->
													<select name="cidade">
                                                    	<option value="0" selected="" disabled="">Cidade</option>
															<?php
																include("funcoes/buscar.php");
																	buscar_cidade();
															?>
													</select>
                                                    <i></i>
												</label>
											</section>
                                       		<section class="col col-4">
											<label class="label">Local de atendimento</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="local" placeholder="Local de atendimento">
												</label>
											</section>
											<section class="col col-2">
											<label class="label">Data da Viagem</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="date" name="data_viagem">
												</label>
											</section>
                                            <section class="col col-2">
											<label class="label">Hora de Saída</label>
												<label class="input"> <i class="icon-prepend fa fa-building-o"></i>
													<input type="datetime" name="hora_saida" data-mask="99:99" placeholder="Hora de Saída">
												</label>
											</section>
                                            <section class="col col-2">
											<label class="label">Hora da Consulta</label>
												<label class="input"> <i class="icon-prepend fa fa-building-o"></i>
													<input type="datetime" name="hora_consulta" data-mask="99:99" placeholder="Hora da Consulta">
												</label>
											</section>
										</div>

										<div class="row">
																					
											<section class="col col-2">
											<label class="label">Local de Saída(Ponto)</label>
												<label class="input"> <i class="icon-prepend fa fa-building"></i>
													<input type="text" name="local_saida" placeholder="Local de Saída(Ponto)">
												</label>
											</section>
											<section class="col col-2">
											<label class="label">Passageiros</label>
												<label class="input"> <i class="icon-prepend fa fa-building"></i>
													<input type="number" name="num_pessoas" placeholder="Quantidade de Passageiros">
												</label>
											</section>
											<section class="col col-4">
											<label class="label">Motoristas</label>
												<label class="select"> 
													<select name="motoristas">
															<option value="0" selected="" disabled="">Motorista</option>
															<?php
																buscar_motoristas();
															?>
													</select>
                                                    <i></i>
												</label>
											</section>
                                            <section class="col col-2">
											<label class="label">Carro</label>
												<label class="select"> 
													<select name="carro" class="select">
															<option value="0" selected="" disabled="">Carro</option>
															<?php
																buscar_carro();
															?>
													</select>
                                                    <i></i>
												</label>
											</section>
                                            
                                            <section class="col col-2">
											<label class="label">Contato</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="contato" placeholder="Contato" data-mask="(99)99999-9999">
												</label>
											</section>
										</div>
									</fieldset>

									<fieldset>
										<div class="row">
											
										</div>

									</fieldset>

									<footer>
										<button type="submit" name="inserir" value="viagens" class="btn btn-success">
											Agendar
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
				cpf : {
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
				data_nasc : {
					required : true,
					date : true
				},
				uf : {
					required : true
				},
				code : {
					required : true,
					digits : true
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
				cpf : {
					required : 'Digite o CPF'
				},
				nome : {
					required : 'Please enter your first name'
				},
				endereco : {
					required : 'Please enter your last name'
				},
				email : {
					required : 'Please enter your email address',
					email : 'Please enter a VALID email address'
				},
				numero : {
					required : 'Please enter your phone number'
				},
				bairro : {
					required : 'Please select your country'
				},
				cidade : {
					required : 'Please enter your city'
				},
				code : {
					required : 'Please enter code',
					digits : 'Digits only please'
				},
				data_nasc : {
					required : 'Please enter your full address'
				},
				uf : {
					required : 'Escolha um Estado'
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