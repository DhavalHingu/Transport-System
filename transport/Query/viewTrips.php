<?php
  ob_start();
  session_start();
  require_once '../dbconnect.php';
  
  // if session is not set this will redirect to login page
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
<style>
          @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
          body, h1, h2, h3, h4, h5, h6{
          font-family: 'Bree Serif', serif;
          }
       </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
          <a class="navbar-brand" href="../dhaval1.php">Add Employee</a>
        </div>
      <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../home.php">Home</a></li>
            <li><a href="../dhaval.php">Add Trip</a></li>
              <li><a href="../expenses.php">Expenses</a></li>
              <li><a href="../due.php">Due Amount</a></li>
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
<?php
   include '../dbconnect.php';
    $result=mysql_query("select * from `tripdetails`");
    echo "<h3>Trip Details are as Follows</h3><hr>";
   $invoice_no=$_POST['invoice_no'];
    if(mysql_num_rows($result)>0)
    {
    echo "<table border=1 bgcolor=#f4f7f8 bordercolor=blue>
 <tr>
 <th>Trip No</th>
 <th>Invoice No</th>
 <th>Truck No</th>
 <th>Date</th>
 <th>From</th>
 <th>To</th>
 <th>Full Address</th>
 <th>Name</th>
 <th>Contact</th>
 <th>Weight</th>
 <th>Rate Permit</th>
 <th>Total Fraight</th>
 <th>Advance</th>
 <Th>Balance</th>
 <th>W_Charge</th>
 <th>Claim</th>
 <th>Truck Owner</th>
 <th>Driver Name</th>
</tr>";

while($row=mysql_fetch_array($result))
{
  echo "<tr>";

  echo "<td>".$row['trip_no']."</td>";
  echo "<td><a href=\"../d\index111.php?id={$row['invoice_no']}\">".$row['invoice_no']."</a></td>";
  echo "<td>".$row['truck_no']."</td>";
  echo "<td>".$row['date']."</td>";
  echo "<td>".$row['from']."</td>";
  echo "<td>".$row['to']."</td>";
  echo "<td>".$row['address']."</td>";
  echo "<td>".$row['name']."</td>";
echo "<td>".$row['contact']."</td>";
  echo "<td>".$row['weight']."</td>";
  echo "<td>".$row['rate_permit']."</td>";
  echo "<td>".$row['total_fraight']."</td>";
  echo "<td>".$row['advance']."</td>";
  echo "<td>".$row['balance']."</td>";
  echo "<td>".$row['w_charge']."</td>";
  echo "<td>".$row['claim']."</td>";
  echo "<td>".$row['truck_owner']."</td>";
  echo "<td>". $row['driver_name'] . "</td>";

  //echo "<td> <a href='delete.php'>delete</a></td>";
  echo "</tr>";
}
echo "</table>";
}
?>
</div>
</div>
</div>
</div>
</div> 
</div>
  <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>


    

