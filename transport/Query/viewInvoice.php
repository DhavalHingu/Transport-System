<?php
  ob_start();
  session_start();
  require_once '../dbconnect.php';
  
  // if session is not set tdis will redirect to login page
  if( !isset($_SESSION['user']) ) {
    header("Location: index.php");
    exit;
  }
  // select loggedin users detail
  $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
  $userRow=mysql_fetch_array($res);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
<link rel=\"stylesheet\" href=\"http://phptopdf.com/bootstrap.css\">
        <style>
          @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
          body, h1, h2, h3, h4, h5, h6{
          font-family: 'Bree Serif', serif;
          }
       </style>
    <script language="javascript" type="text/javascript">
        function printDiv()
{

  var divToPrint=document.getElementById('printableArea');

  var newWin=window.open('','Print-Window','width=100,height=100');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}
    </script>
<title>Welcome - <?php echo $userRow['userName']; ?></title>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css" />
</head>
<body>
<a href="home.php">Home</a>
  <nav class="navbar navbar-default navbar-fixed-top">

      <div class="container">
        <div class="navbar-header">
     
     
     

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dhaval1.php">Add Employee</a>
        </div>
      <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../home.php">Home</a></li>
            <li><a href="../dhaval.php">Add Trip</a></li>
              <li><a href="../expenses.php">Expenses</a></li>
            <li><a href="../view.php">View</a></li>
            
          
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userName']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

  <div id="wrapper">
<div class="page-header">
  <center> <h1>Kotputli Shahpura Road-Carier</h1></center>
  <div class="container">
    <marquee>Welcome...</marquee>
  <div class="container">
    
      <div class="page-header">
  
      </div>
        
        <div class="row">
        <div class="col-lg-12">
        <div id="printableArea">
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

}

?>

<h3><center> Your Trip Details </center</h3><hr>
<table border=2    width="55%" >
 
<tr><td>Trip No:</td><td> <?php echo $a; ?></td></tr>
 <tr><td>Invoice No:</td><td><?php echo $b; ?></td></tr>
 <tr><td>Truck No:</td><td><?php echo $c; ?></td></tr>
 <tr><td>Date:</td><td><?php echo $d; ?></td></tr>
 <tr><td>From:</td><td><?php echo $e; ?></td></tr>
 <tr><td>To:</td><td><?php echo $f; ?></td></tr>
 <tr><td>Full Address:</td><td><?php echo $g; ?></td></tr>
 <tr><td>Name:</td><td><?php echo $h; ?></td></tr>
<tr><td>Contact:</td><td><?php echo $h1; ?></td></tr>

 <tr><td>Weight:</td><td><?php echo $i; ?></td></tr>
 <tr><td>Rate Permit:</td><td><?php echo $j; ?></td></tr>
 <tr><td>Total Fraight:</td><td><?php echo $k; ?></td></tr>
 <tr><td>Advance:</td><td><?php echo $l; ?></td></tr>
 <tr><td>Balance:</td><td><?php echo $m; ?></td></tr>
 <tr><td>W_Charge:</td><td><?php echo $n; ?></td></tr>
 <tr><td>Claim:</td><td><?php echo $o; ?></td></tr>
 <tr><td>Truck Owner:</td><td><?php echo $p; ?></td></tr>
 <tr><td>Driver Name:</td><td><?php echo $q; ?></td></tr>
 </table></center><hr>
  <br><br><div align="left">  Driver Signature</div>
      <div align="right">  Authority Signature</div>

</div>

<div>
<center>
<form>
<input type="submit" name="submit" value="print" onclick="javascript:printDiv('printablediv')">
</form>
</center>
</div>

</div>
</div>
</div>
</div>
</div> 
</div>
  <script src="../assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    
</body>
</html>


  
<?php ob_end_flush(); ?>


    

