<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
//$page_nav["Pesquisa"]["sub"]["responsavel"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs["Pesquisa"] = "";
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
							<span class="widget-icon"> <i class="fa fa-search"></i> </span>
							<h2>Formulário de Pesquisa </h2>				
							
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
                                    if(isset($_POST['nome'])){
                                    $id = $_POST['id'];
                                    $codigo = $_POST['cod_tumulo'];
                                    $nome = $_POST['nome'];
                                    echo "<p><h6>".$codigo. "-" .$nome."</h6></p>";
                                        include("form_transferir.php");
                                    }

                                    if(isset($_POST['transferir'])){
										include("funcoes/editar.php");
										transferir_sepultado();
									}
								?>
                                
                              
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
				codigo : {
					required : true
				},
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
				aquisicao : {
					required : true,
					date : true
				},
				uf : {
					required : true
				},
				tipo : {
					required : true
				},
				gaveta : {
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
				codigo : {
					required : 'Digite o código'
				},
				cpf : {
					required : 'Digite o número do CPF'
				},
				nome : {
					required : 'Digite o nome do Proprietário'
				},
				endereco : {
					required : 'Digite o endereço do Proprietário'
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
			
				aquisicao : {
					required : 'Preencha a data de aquisição'
				},
				uf : {
					required : 'Escolha um Estado'
				},
				tipo : {
					required : 'Digite o tipo'
				},
				gaveta : {
					required : 'Digite a gaveta'
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