<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address">Chris Coyier
123 Appleseed Street
Appleville, WI 53719

Phone: (555) 555-5555</textarea>

            <div id="logo">

              <div id="logoctr">
              
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                            </div>
              <img id="image" src="images/logo.png" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">
		<?php
   include '../dbconnect.php';
 $ino=$_REQUEST['id'];
     $result=mysql_query("select * from tripdetails where invoice_no LIKE '%$ino%'");
 

while($row=mysql_fetch_array($result))
{
  $a=$row['trip_no'];
 $b= $row['invoice_no'];
  $c=$row['truck_no'];
  $d=$row['date'];
  $e=$row['from'];
  $f=$row['to'];
  $g=$row['address'];
  $h=$row['name'];
  $i=$row['weight'];
  $j=$row['rate_permit'];
  $k=$row['total_fraight'];
  $l=$row['advance'];
  $m=$row['balance'];
  $n=$row['w_charge'];
  $o=$row['claim'];
  $p=$row['truck_owner'];
  $q=$row['driver_name'];

}

?>


            <textarea id="customer-title">Kotputli Shahpura Road Carier</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><?php echo $b; ?></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date"><?php echo $d; ?></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due"><?php echo $k; ?></div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Trip No</th>
		      
		      <th>To:</th>
		      <th>From</th>
		      <th>weight</th>
		      <th>Rate Permit</th>
		      <th>W Charge</th>
		      <th>Claim</th>
		      <th>Truck Owner</th>
		      <th>Driver Name</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea><?php echo $a; ?> </textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea><?php echo $f; ?></textarea></td>
		      <td><textarea class="cost"><?php echo $e; ?></textarea></td>
		      <td><textarea class="qty"><?php echo $i; ?></textarea></td>
		      <td><span class="price"><?php echo $j; ?></span></td>
		  </tr>
		  
		  
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Advance</td>
		      <td class="total-value"><div id="subtotal"><?php echo $l; ?></div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total"><?php echo $m; ?></div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">$0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$875.00</div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div>
	
	</div>
	
</body>

</html>