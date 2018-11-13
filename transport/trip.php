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
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['userName']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trip</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="cemployee.php">Add Employee</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="trip.php">Add Trip</a></li>
            <li><a href="view.php">View</a></li>
            <li><a href="tb.php">Total billing</a></li>
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

	<!--<div class="container">
    
    	<div class="page-header">
    	<h3>Coding Cage - Programming Blog</h3>
    	</div>
        
        <div class="row">
        <div class="col-lg-12">
        <h1>Focuses on PHP, MySQL, Ajax, jQuery, Web Design and more...</h1>
        </div>
        </div>
    
0 0   </div>-->
    
    </div>
   
      <form action="tripconnection.php" method="post">
      
        <h1>Trip Details</h1>
        
        <fieldset>
          <legend><span class="number">-></span>Information</legend>
          <label for="name">Invoice no:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="name">Truck No:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="name">Date:</label>
          <input type="date" id="name" name="user_name">
          
          <label for="name">From:</label>
          <input type="text" id="name" name="user_name" placeholder="enter source address">
          
          <label for="name">To:</label>
          <input type="text" id="name" name="user_name" placeholder="enter destination address">

           <label for="bio">Full Address:</label>
          <textarea id="bio" name="user_bio"></textarea>

          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">

          <label for="name">Weight:</label>
          <input type="text" id="name" name="user_name">

          <label for="name">Rate Permit:</label>
          <input type="text" id="name" name="user_name">

          <label for="name">Total fraight:</label>
          <input type="text" id="name" name="user_name">

          <label for="name">Advance:</label>
          <input type="text" id="name" name="user_name" placeholder="cost">

          <label for="name">Balance:</label>
          <input type="text" id="name" name="user_name" placeholder="cost">

          <label for="name">W_charge:</label>
          <input type="text" id="name" name="user_name">

          <label for="name">Claim:</label>
          <input type="text" id="name" name="user_name">
          
          
          
          
                    
          
          <legend><span class="number">2</span>Driver Information</legend>
          
          <label for="name">Truck Owner:</label>
          <input type="text" id="name" name="user_name">
          
         
        </fieldset>
        <fieldset>
        <label for="job">Driver Name:</label>
        <select id="job" name="Driver">
          <optgroup label="Web">
            <option value="frontend_developer"></option>
            <option value="php_developor"></option>
            <option value="python_developer"></option>
            <option value="rails_developer"> </option>
            <option value="web_designer"></option>
            <option value="WordPress_developer"></option>
          </optgroup>
          
        
        </fieldset>
        <input type="submit" value="Register"></button>
      </form>

    
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    

    
</body>
</html>
<?php ob_end_flush(); ?>