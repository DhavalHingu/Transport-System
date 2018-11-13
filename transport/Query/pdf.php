<?php

  if(isset($_POST['submit']))
  {
  	require('fpdf.php');
     //read the contents of a url you want to convert to PDF
$content = file_get_contents('viewInvoice.php');
//Load PHP DOM
$doc = new DOMDocument();

//load HTML in PHP DOM
@$doc->loadHTML($content);
//extract the text of a DIV element for PDF
//$text_for_pdf = $doc->getElementById('col-lg-12')->nodeValue;


//use FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

//specify width and height of the cell Multicell(width, height, string)
//load extracted text into FPDF
$pdf->Multicell(190,10, $content);

$pdf->Output(); //output the file


  }
  ?>