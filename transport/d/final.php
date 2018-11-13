<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
  
  <title>Trip Information</title>
  
  <link rel='stylesheet' type='text/css' href='css/style.css' />
  <link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
  <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/example.js'></script>
<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
  </script>

</head>

<body>
<?php
   include '../dbconnect.php';
 $aa=$_POST['name'];


  if(isset($_POST['submit']))
  {
    $result=mysql_query("select * from tripdetails where invoice_no LIKE '$aa'");
  

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
  $h1=$row['contact'];
  $i=$row['weight'];
  $j=$row['rate_permit'];
  $k=$row['total_fraight'];
  $l=$row['advance'];
  $m=$row['balance'];
  $n=$row['w_charge'];
  $o=$row['claim'];
  $p=$row['truck_owner'];
  $q=$row['driver_name'];
  $r=$row['receive1'];
  $s=$row['receive2'];
  $t=$row['receive3'];
  $u=$row['receive4'];
}

?>
<center><input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value=" Print ">
</center>
 <div id="div_print">
  <div id="page-wrap">

    <textarea id="header">RECEIVE</textarea>
  
    
    <div id="identity">
    
            <label id="address">
<?php echo $h; echo "<br>";echo $g; echo "<br>";echo "Contact: "; echo $h1; ?></label>

                <div style="clear:both"></div>
    
    <div id="customer">
    

            <textarea id="customer-title">Kotputli Shahpura Road Carier</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><label><?php echo $b; ?></label></td>
                </tr>
                
                

                    

               


            </table>
    
    </div>
    
    <table id="items">
    
      <tr>
          <th>Receive Balance 1</th>
          <th>Receive Balance 2</th>
          <th>Receive Balance 3</th>
          <th>Receive Balance 4</th>          
      </tr>
      
      <tr class="item-row">
          <td><textarea class="cost"><?php echo $r ?></textarea></td>
          <td><textarea class="cost"><?php  echo $s;  ?></textarea></td>
          <td><textarea class="cost"><?php  echo $t;  ?></textarea></td>
          <td><textarea class="cost"><?php  echo $u; ?></textarea></td>
      </tr>
      </table>
      
      <br>
      <br>
      <table align="right" id="meta" >        
       <tr>
                    <td class="meta-head">Total Amount</td>
                    <td><div class="due"><?php echo $k; ?></div></td>
                </tr>
  
      <tr>
           <td class="meta-head">Advance</td>
          <td><label><?php echo $l; ?></label></td>
      </tr>
      <tr>

           <td class="meta-head">Due Amount</td>
          <td><?php echo $m; ?></td>
      </tr>
      
    </table>
    <br>
    <br>
    <br>
    <br>

    <div id="terms">
      <h5>Terms</h5>
      <label>Your unpaid balance pay within 20 days.</label>
    </div>
  
  </div>
  </div>
  </div>
<?php } ?>
  
</body>

</html>