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
          <a class="navbar-brand" href="dhaval1.php">Add Employee</a>
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
    $result=mysql_query("select * from `expenses`");
    echo "<h3>Trip_Expenses Details are as Follows</h3><hr>";
    echo "<table border=1 cellspacing=40 cellpadding=7 bordercolor=blue bgcolor=#f4f7f8>
<tr>
<th>Sr No</th>
 <th>Trip No</th>
 <th>Diesel Exps</th>
 <th>Way Exps</th>
 <th>Toll-Tax</th>
 <th>Road Repairs</th>
 <th>Foods & Nasta</th>
 <th>General Exps</th>
 <th>Driver Bhatta</th>
 <th>Cleaner Bhatta</th>
 <th>Driver Telephone</th>
 <th>Loading Exps</th>
 <th>Unloading Exps</th>
 <Th>Others Exps</th>
 <th>Total Exps</th>
</tr>";

while($row=mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$row['sr_no']."</td>";
  echo "<td>".$row['trip_no']."</td>";
  echo "<td>".$row['diesel']."</td>";
  echo "<td>".$row['way']."</td>";
  echo "<td>".$row['toll_tax']."</td>";
  echo "<td>".$row['road_repairs']."</td>";
  echo "<td>".$row['foods']."</td>";
  echo "<td>".$row['general']."</td>";
  echo "<td>".$row['driver']."</td>";
  echo "<td>".$row['cleaner']."</td>";
  echo "<td>".$row['telephone']."</td>";
  echo "<td>".$row['loading']."</td>";
  echo "<td>".$row['unloading']."</td>";
  echo "<td>".$row['others']."</td>";
  echo "<td>".$row['total']."</td>";
   echo "</tr>";
}
echo "</table>";
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


    

