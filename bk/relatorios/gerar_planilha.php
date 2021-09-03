 <?php
	session_start();
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
		<style>
			table.excel {
			table-layout: auto;
			width: 60%;
			border: 1px solid black;
			}
		 	tr.excel:nth-child(even) {background: #FFF}
			tr.excel:nth-child(odd) {background: #EEE}
		</style>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'lista_ativos.xls';
		$mes = "AGOSTO";
		// Criamos uma tabela HTML com o formato da planilha
		$html .= 'RELATÓRIO MENSAL REFERENTE A '.$mes;	
		$html .= '<table class="excel" border="1">';
		$html .= '<tr class="excel">';
		$html .= '<td><b>CÓDIGO</b></td>';
		$html .= '<td><b>NOME</b></td>';
		$html .= '<td><b>DOCUMENTO</b></td>';
		$html .= '<td><b>NOTA FISCAL</b></td>';
		$html .= '<td><b>VALOR</b></td>';
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$result_msg_contatos = "SELECT * FROM cadastro where ativo = 'S' ORDER BY nome";
		$resultado_msg_contatos = mysqli_query($conn , $result_msg_contatos);
		
		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
			$html .= '<tr class="excel">';
			$html .= '<td>'.$row_msg_contatos["cod_tributos"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nome"].'</td>';
			$html .= '<td>'.$row_msg_contatos["documento"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nota_fiscal"].'</td>';
			$html .= '<td>'.$row_msg_contatos["valor"].'</td>';
			$html .= '</tr>';
			;
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>