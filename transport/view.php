<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  
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
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
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
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="dhaval.php">Add Trip</a></li>
              <li><a href="expenses.php">Expenses</a></li>
              <li><a href="due.php">Due Amount</a></li>
            <li><a href="#">View</a></li>
            
          
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
<form action="d\im111.php" method="post">
<table>
<div>
  <tr><td>Enter Invoice no:</td> <td><input type="text" name="invoice"></td>
  <td><center><input type="submit" name="submit" value="Go"></center></td></tr>
</div>
</table>
</form>
<div>
 <a href="Query\viewTrips.php">View All Trips Details</a>
 </div>
 <div>
 <a href="Query\viewExpenses.php">View All Trip_Expenses Details</a>
 </div>
 <div>
 <a href="Query\vi.php">view complete trips details </a>
 <form action="Query\total_trip.php" method="post">
<table>
 <div>
    <tr><td>Enter Trip no:</td> <td><input type="text" name="trip"></td>
  <td><center><input type="submit" name="submit" value="Go"></center></td></tr>
  </div>
  </table>
  </form>
  <form action="d\final.php" method="post">
<table>
 <div>
    <tr><td>Enter Party Invoice(Receive):</td> <td><input type="text" name="name"></td>
  <td><center><input type="submit" name="submit" value="Go"></center></td></tr>
  </div>
  </table>
  </form>
 </div>
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
