<?php require_once("inc/init.php"); ?>
<div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			<i class="fa fa-edit fa-fw "></i> 
				Livros > Editar Livros
		</h1>
	</div>
</div>
<?php
	session_start();
	if($_SESSION['alerta']=="1"){
		include ("../includes/alert_form.php");
	}
	$_SESSION['alerta'] = "0";
?>
<!-- widget grid -->
<section id="widget-grid" class="">

	<!-- START ROW -->
	<div class="row">

		<!-- NEW COL START -->
		<article class="col-sm-12 col-md-12 col-lg-12">

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
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

						<form action="includes/inclui_livros.php" method="post" class="smart-form" id="checkout-form">
							<header>
								Insira os dados cuidadosamente
							</header>

							<fieldset>
								<div class="row">
									<section class="col col-4">
										<label class="input"><i class="icon-prepend fa fa-user"></i>
											<input type="text" name="titulo" value="teste">
										</label>
									</section>
									<section class="col col-4">
										<label class="input"><i class="icon-prepend fa fa-user"></i>
											<input type="text" name="classificacao" placeholder="Classificação">
										</label>
									</section>
									<section class="col col-4">
										<label class="input"><i class="icon-prepend fa fa-user"></i>
											<input type="text" name="autores" placeholder="Autores">
										</label>
									</section>
								</div>
								<div class="row">
									<section class="col col-2">
										<label class="input"><i class="icon-prepend fa fa-user"></i>
											<input type="text" name="codigo" placeholder="Código">
										</label>
									</section>
									<section class="col col-2">
										<label class="input"><i class="icon-prepend fa fa-user"></i>
											<input type="text" name="exemplar" placeholder="Nº exemplares">
										</label>
									</section>
									<section class="col col-2">
										<label class="input"><i class="icon-prepend fa fa-user"></i>
											<input type="text" name="localizacao" placeholder="Localização">
										</label>
									</section>
									<input type="hidden" name="data_hoje" value= <?php echo $hoje ?>>
								</div>
							</fieldset>
							<footer>
								<button type="submit" name="salvar" class="btn btn-primary">
									Salvar
								</button>
								<button type="button" class="btn btn-default" onclick="window.history.back();">
									Voltar
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
				titulo : {
					required : true
				},
				classificacao : {
					required : true
				},
				autores : {
					required : true
				},
				codigo : {
					required : true
				},
				exemplar : {
					required : true
				},
				localizacao : {
					required : true
				},
			},
	
			// Messages for form validation
			messages : {
				titulo : {
					required : 'Digite o título do livro'
				},
				classificacao : {
					required : 'Digite a classificação do livro'
				},
				autores : {
					required : 'Digite o autor do livro',
				},
				codigo : {
					required : 'Digite o código do livro',
				},
				exemplar : {
					required : 'Digite a quantidade de exemplares'
				},
				localizacao : {
					required : 'Digite a localização do livro'
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