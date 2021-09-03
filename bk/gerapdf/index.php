<?php 
 include("mpdf60/mpdf.php");
$quantia = "Cem reais";
include("/funcoes/pesquisa.php");
    $resultado = teste_pdf();
$html = $resultado;
 

 $mpdf=new mPDF(); 
 $mpdf->SetDisplayMode('fullpage');
 $css = file_get_contents("css/estilo.css");
 $mpdf->WriteHTML($css,1);
 $mpdf->WriteHTML($html);
 $mpdf->Output();
 

 exit;