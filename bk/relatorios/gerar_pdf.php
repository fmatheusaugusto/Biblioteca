<?php	
	include_once("conexao.php");
	$html = '<table';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>CÓDIGO</th>';
	$html .= '<th>NOME</th>';
	$html .= '<th>NOTA FISCAL</th>';
	$html .= '<th>VALOR</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$result_transacoes = "SELECT * FROM cadastro where ativo = 'S' ORDER BY nome";
	$resultado_trasacoes = mysqli_query($conn, $result_transacoes);
	while($row_transacoes = mysqli_fetch_assoc($resultado_trasacoes)){
		$html .= '<tr><td>'.$row_transacoes['cod_tributos'] . "</td>";
		$html .= '<td>'.$row_transacoes['nome'] . "</td>";
		$html .= '<td align="center">'.$row_transacoes['nota_fiscal'] . "</td>";
		$html .= '<td align="center"> R$ '.$row_transacoes['valor'] . "</td></tr>";		
	}
	
	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Relatório de Propagandas</h1>
			'. $html .'
		');
	$dompdf->set_option('defaultFont', 'Courier');
	
	//Tipo de papel (portrait / landscape)
	$dompdf->setPaper('A4', 'portrait');

	
	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>