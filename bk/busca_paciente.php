<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Busca Pacientes";

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
							<h2>Busca de Pacientes </h2>				
							
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
                                        @$acao = $_POST['buscar'];
                                            if ($acao=="pacientes"){
                                              include("funcoes/buscar.php");
                                                          buscar_paciente();
                                                }
                                    ?>
								
								<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="checkout-form" class="smart-form" novalidate>
									<fieldset>
									 	<div class="row">
											<section class="col col-2">
											<label class="label">Documento</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="doc" placeholder="Documento" autofocus >
												</label>
											</section>
                                            <section class="col col-2">
											<label class="label">Cartão SUS</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="sus" placeholder="Cartão SUS">
												</label>
											</section>
											<section class="col col-5">
											<label class="label">Nome</label>
												<label class="input"> <i class="icon-prepend fa fa-user"></i>
													<input type="text" name="nome1" placeholder="Nome">
												</label>
											</section>
										</div>
									</fieldset>
									<footer>
										<button type="submit" name="buscar" value="pacientes" class="btn btn-primary">
											Pesquisar
										</button>
									</footer>
								</form>
                                <fieldset>
                                	<div class="padding-10">
									<br>
									
																		
				  </div>
                                </fieldset>
							</div>
							<!-- end widget content -->
						</div>
                      <div>
						<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
								
							</div>
							
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
<!-- END MAIN CONTENT --></div>
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