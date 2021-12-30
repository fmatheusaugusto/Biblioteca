<?php require_once("inc/init.php"); ?>
<div class="row">
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
		<h1 class="page-title txt-color-blueDark">
			
			<!-- PAGE HEADER -->
			<i class="fa-fw fa fa-pencil-square-o"></i> 
				Cadastrar > Usuários
		</h1>
	</div>
</div>

<div class="alert alert-block alert-success">
	<a class="close" data-dismiss="alert" href="#">×</a>
	<h4 class="alert-heading"><i class="fa fa-check-square-o"></i> Verifique a validação dos dados!</h4>
	<p>
		Preencha os dados cuidadosamente para garantir uma melhor experiência com o sistema
	</p>
</div>

<!-- widget grid -->
<section id="widget-grid" class="">


	<!-- START ROW -->

	<div class="row">

		<!-- NEW COL START -->
		<article class="col-sm-12 col-md-12 col-lg-12">
			
			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
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
					<h2>
						<?php
						$hoje = date('d/m/Y');
						echo $hoje;
						?>
					</h2>			
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
						
						<form action="includes/includes.php" method="post" class="smart-form" novalidate="novalidate">

							<fieldset>
								<div class="row">
									<section class="col col-6">
										<label class="input"> <i class="icon-prepend fa fa-user"></i>
											<input type="text" name="nome" placeholder="Nome Completo">
										</label>
									</section>
									<section class="col col-3">
										<label class="input"> <i class="icon-prepend fa fa-phone"></i>
											<input type="tel" name="telefone" placeholder="Telefone" data-mask="(99) 99999-9999">
										</label>
									</section>
									<section class="col col-3">
										<label class="input"> <i class="icon-prepend fa fa-user"></i>
											<input type="text" name="cpf" placeholder="CPF" data-mask="999.999.999-99">
										</label>
									</section>
									<section class="col col-3">
										<label class="input"> <i class="icon-prepend fa fa-user"></i>
											<input type="date" name="data_nasc" placeholder="Data de Nascimento">
										</label>
									</section>
								</div>
							</fieldset>

							<fieldset>
								<div class="row">
									<section class="col col-10">
										<label for="address" class="input"> <i class="icon-prepend fa fa-book"></i>
											<input type="text" name="endereco_rua" placeholder="Rua">
										</label>
									</section>
									<section class="col col-2">
										<label for="address" class="input"> <i class="icon-prepend fa fa-book"></i>
											<input type="text" name="endereco_numero" placeholder="Número">
										</label>
									</section>
								</div>
							</fieldset>
							<footer>
								<button type="submit" class="btn btn-primary">
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

		</article>
		<!-- END COL -->		

	</div>

	<!-- END ROW -->

</section>
<!-- end widget grid -->

		
<!-- SCRIPTS ON PAGE EVENT -->
<script type="text/javascript">
	
	/* DO NOT REMOVE : GLOBAL FUNCTIONS!
	 *
	 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
	 *
	 * // activate tooltips
	 * $("[rel=tooltip]").tooltip();
	 *
	 * // activate popovers
	 * $("[rel=popover]").popover();
	 *
	 * // activate popovers with hover states
	 * $("[rel=popover-hover]").popover({ trigger: "hover" });
	 *
	 * // activate inline charts
	 * runAllCharts();
	 *
	 * // setup widgets
	 * setup_widgets_desktop();
	 *
	 * // run form elements
	 * runAllForms();
	 *
	 ********************************
	 *
	 * pageSetUp() is needed whenever you load a page.
	 * It initializes and checks for all basic elements of the page
	 * and makes rendering easier.
	 *
	 */

	pageSetUp();
	
	
	// PAGE RELATED SCRIPTS

	// pagefunction
	
	var pagefunction = function() {

		var $checkoutForm = $('#checkout-form').validate({
		// Rules for form validation
			rules : {
				nome : {
					required : true
				},
				telefone : {
					required : true,
				},
				cpf : {
					required : true,
				},
				endereco_rua : {
					required : true
				},
				endereco_numero : {
					required : true
				},
				data : {
					required : true
				},
			},
	
			// Messages for form validation
			messages : {
				nome : {
					required : 'Por favor insira seu nome'
				},
				data : {
					required : 'Por favor insira sua data de nascimento'
				},
				telefone : {
					required : 'Por favor insira seu telefone',
					telefone : 'Por favor insira um telefone VALIDO'
				},
				cpf : {
					required : 'Por favor insira seu cpf',
					cpf : 'Por favor insira um cpf VALIDO'
				},
				endereco_rua : {
					required : 'Por favor insira seu endereço'
				},
				endereco_numero : {
					required : 'Por favor insira seu endereço'
				},
			},
	
			// Do not change code below
			errorPlacement : function(error, element) {
				error.insertAfter(element.parent());
			}
		});

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
		
	};
	
	// end pagefunction
	
	// Load form valisation dependency 
	loadScript("js/plugin/jquery-form/jquery-form.min.js", pagefunction);

</script>
