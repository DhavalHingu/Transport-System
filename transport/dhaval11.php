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
<style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 0;
  width:100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
  
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
</style>
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
            <li><a href="#">View</a></li>
            <li><a href="#">Total billing</a></li>
              <li><a href="expenses.php">Expenses</a></li>
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
             <form oninput="x.value=parseInt(a.value)-parseInt(b.value)" action="../tripconnection.php" method="post">
      
        <h1>Trip Details</h1>
          <label for="name">Invoice no:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="name">Truck No:</label>
          <input type="text" id="name" name="truck_no">
          
          <label for="name">Date:</label>
          <input type="date" id="name" name="date">
          
          <label for="name">From:</label>
          <input type="text" id="name" name="from" placeholder="enter source address">
          
          <label for="name">To:</label>
          <input type="text" id="name" name="to" placeholder="enter destination address">

           <label for="bio">Full Address:</label>
          <textarea id="bio" name="address"></textarea>

          <label for="name">Name:</label>
          <input type="text" id="name" name="name">

          <label for="name">Weight:</label>
          <input type="text" id="name" name="weight">

          <label for="name">Rate Permit:</label>
          <input type="text" id="name" name="rate_permit">

          <label for="name">Total fraight:</label>
          <input type="text" id="a" name="total_fraight">

          <label for="name">Advance:</label>
          <input type="text" id="b" name="advance" placeholder="cost">

          <label for="name">Balance:</label>
          <input type="text" id="x" name="balance"  placeholder="cost">

          <label for="name">W_charge:</label>
          <input type="text" id="name" name="w_charge">

          <label for="name">Claim:</label>
          <input type="text" id="name" name="claim">
          
          
          
          
                    
          
          <legend><span class="number">2</span>Driver Information</legend>
          
          <label for="name">Truck Owner:</label>
          <input type="text" id="job" name="truck_owner">
          
         
        </fieldset>
        <fieldset>
        <label for="job">Driver Name:</label>
        <select id="job" name="driver_name">
         <!-- <optgroup label="Drivers">!-->
           
                <?php
                    require_once '../dbconnect.php';
                      $driver = mysql_query("SELECT * FROM employee");
                      while($row = mysql_fetch_array($driver))
                      {

                        echo "<option value=".$row['name'].">".$row['name']."</option>";
                      }

                    ?>


           
          
        
        </fieldset>
        <input type="submit" value="Register" name="submit"></button>
      </form>

      
             
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