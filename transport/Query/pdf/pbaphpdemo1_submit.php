<?php
// Use this line when using the full version of PDFBuilderASP...
//$objPDF = new COM("PDFBuilderASP.PDFSvrDoc");

// ...or this line when using the trial version of PDFBuilderASP
 $objPDF = new COM("PDFBuilderASPTrial.PDFSvrDoc");

$objPDF->DefaultPageSize = 1;
$objPDF->Units = 3;
$objPDF->AddPage(1);

// Create a graphic incuding all the rectangles and lines to be used in the document
$Graphic = $objPDF->CreateGraphic;
$objPDF->LineColor = 0x000000;
$objPDF->FillColor = 0xFFFFFF; 
$objPDF->LineWidth = 1;
$objPDF->Rectangle(30.0, 220.0, 180.0, 70.0);
$objPDF->DrawLine(30.0, 190.0, 180.0, 190.0);
$objPDF->DrawLine(105.0, 190.0, 105.0, 220.0);
$objPDF->Rectangle(100.0, 65.0, 180.0, 70.0);
$objPDF->DrawLine(160.0, 65.0, 160.0, 190.0);
$objPDF->FillColor = 0x88CCCC;
$objPDF->Rectangle(30.0, 265.0, 180.0, 240.0);
// Draw the graphic on the page
$objPDF->ApplyResource(1, $Graphic);

// Read the logo image from a file and draw it on the page.  Position the logo using the Locate and ScaleObject commands
$Logo = $objPDF->AddImageFile($_SERVER['DOCUMENT_ROOT'].'/samples/mylogo.gif');
$LogoIndex = $objPDF->ApplyResource(1, $Logo);
$objPDF->Locate(1, $LogoIndex, 40.0, 260.0);
$objPDF->ScaleObject(1, $LogoIndex, 90.0);

// Write the company's name and address...
$Address = $objPDF->CreateText;
$objPDF->TextFont = 5;
$objPDF->TextSize = 8;
$objPDF->TextColor = 0x000000;
$objPDF->WriteText('My company name');
$objPDF->WriteText('Address line 1');
$objPDF->WriteText('Address line 2');
$AddressIndex = $objPDF->ApplyResource(1, $Address);
$objPDF->Locate(1, $AddressIndex, 95.0, 260.0);
 
// ...and the company's contact details...
$Contact = $objPDF->CreateText;
$objPDF->TextFont = 5;
$objPDF->TextSize = 8;
$objPDF->TextColor = 0x000000;
$objPDF->WriteText('Tel: 01234 567890');
$objPDF->WriteText('Fax: 01234 567891');
$objPDF->WriteText('Email: sales@mycompany.com');
$ContactIndex = $objPDF->ApplyResource(1, $Contact);
$objPDF->Locate(1, $ContactIndex, 130.0, 260.0);
 
// ...and a title for the invoice
$Title = $objPDF->CreateText;
$objPDF->TextFont = 6;
$objPDF->TextSize = 14;
$objPDF->TextColor = 0x000000;
$objPDF->WriteText('Sales Invoice');
$TitleIndex = $objPDF->ApplyResource(1, $Title);
$objPDF->Locate(1, $TitleIndex, 90.0, 235.0);

// Retrieve the customer name and address data that was submitted by POST from the Request object
$CustName = $objPDF->CreateText;
$objPDF->TextFont = 6;
$objPDF->TextSize = 8;
$objPDF->TextColor = 0x000000;
$objPDF->WriteText('Customer:');
$objPDF->WriteText('');
$objPDF->WriteText($_REQUEST['customername']);
$objPDF->WriteText($_REQUEST['address1']);
$objPDF->WriteText($_REQUEST['address2']);
$CustNameIndex = $objPDF->ApplyResource(1, $CustName);
$objPDF->Locate(1, $CustNameIndex, 35.0, 215.0);

// Read the current date from the server and convert this into strings showing the day, month and year.  Add the date to the document 
$DateText = $objPDF->CreateText;
$objPDF->TextFont = 6;
$objPDF->TextSize = 8;
$objPDF->TextColor = 0x000000;
$Today = getdate();
$D = $Today['mday'];
$M = $Today['month'];
$Y = $Today['year'];
$objPDF->WriteText('Date: '.$D.' '.$M.' '.$Y);
$DateTextIndex = $objPDF->ApplyResource(1, $DateText);
$objPDF->Locate(1, $DateTextIndex, 110.0, 215.0);

// Write description of what the invoice is for...
$Desc = $objPDF->CreateText;
$objPDF->TextFont = 5;
$objPDF->TextSize = 8;
$objPDF->TextColor = 0x000000;
$objPDF->WriteText('For goods supplied.....');
$DescIndex = $objPDF->ApplyResource(1, $Desc);
$objPDF->Locate(1, $DescIndex, 35.0, 185.0);

// ...and the price...
$Price = $objPDF->CreateText;
$objPDF->TextFont = 5;
$objPDF->TextSize = 8;
$objPDF->TextColor = 0x000000;
$objPDF->WriteText('$50.00');
$PriceIndex = $objPDF->ApplyResource(1, $Price);
$objPDF->Locate(1, $PriceIndex, 165.0, 185.0);

// ...and text for the total...
$Total = $objPDF->CreateText;
$objPDF->TextFont = 6;
$objPDF->TextSize = 12;
$objPDF->TextColor = 0x000000;
$objPDF->WriteText('TOTAL PAYMENT DUE');
$TotalIndex = $objPDF->ApplyResource(1, $Total);
$objPDF->Locate(1, $TotalIndex, 105.0, 70.0);

// ...and the total amount
$Amount = $objPDF->CreateText;
$objPDF->TextFont = 6;
$objPDF->TextSize = 12;
$objPDF->TextColor = 0x000000;
$objPDF->WriteText('$50.00');
$AmountIndex = $objPDF->ApplyResource(1, $Amount);
$objPDF->Locate(1, $AmountIndex, 164.0, 70.0);

// Finally, save the file, send header information to the browser, read and send the file, and delete the file
$objPDF->SaveToFile($_SERVER['DOCUMENT_ROOT'].'/InvoiceDemo.pdf');
$objPDF = null;
header('Content-Disposition: inline; filename="InvoiceDemo.pdf"');
header('Content-Type: application/pdf');
header('Content-Length: '.filesize($_SERVER['DOCUMENT_ROOT'].'/InvoiceDemo.pdf'));
readfile($_SERVER['DOCUMENT_ROOT'].'/InvoiceDemo.pdf');
unlink($_SERVER['DOCUMENT_ROOT'].'/InvoiceDemo.pdf');
?> 