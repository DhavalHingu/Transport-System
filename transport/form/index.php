<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Trip</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trip</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
<a href="../home.php">Home </a>|

      <form oninput="x.value=parseInt(a.value)-parseInt(b.value)" action="../tripconnection.php" method="post">
      
        <h1>Trip Details</h1>
        
        <fieldset>
          <legend><span class="number">-></span>Information</legend>
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
      
    </body>
</html>
  
  
</body>
</html>
