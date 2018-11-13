A PHP DEMO FOR PDFBuilderASP

REQUIREMENTS

The trial version of PDFBuilderASP (PDFBuilderASPTrial.dll) must be registered on the server where the demo is to be run.  This is available as a free download from http://www.ciansoft.com/pdfbuilderasp/download.asp
The contents of the file pbaphpdemo1.zip must be unzipped and all files placed in the same directory.   

DESCRIPTION

This demo shows how a single page PDF document (an invoice) can be created using a PHP script.  The demo can be run by opening the web page 'TestForm.htm', completing the name and address fields on the form and clicking the 'Create PDF' button to generate and display the PDF.

IMPORTANT POINTS

1. The PDFBuilderASP component is a COM object and only runs under Windows operating systems.  It can therefore only be used with PHP on Windows servers.

2. The web page 'TestForm.htm' submits input data to the PHP script 'pbaphpdemo1_submit.php' by an HTTP POST.  The PDF file is created by the script.

2. The script demonstrates how images are added (a company logo), how graphics are drawn (various rectangles and lines to show boxes on the invoice) and the writing of several text fields.

3. The PDF created will show the name and address entered on the form.  Other text displayed is fixed.  The date is read from the server.

4. A PDF file created using the trial version of this component will display a banner on each page to show that trial software was used.  To see a PDF file produced using the full version of the software run the online version of this demo at http://www.ciansoft.com/samples/pbaphpdemo1.php. 

TROUBLESHOOTING

If you encounter any difficulties running this demo, please contact support@ciansoft.com for help.

Ciansoft, May 2006.
Website: www.ciansoft.com