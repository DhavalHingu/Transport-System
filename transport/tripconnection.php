<?php
include 'dbconnect.php';

    if (isset($_POST['submit'])){
  $trip_no=$_POST['trip_no'];    
  $truck_no=$_POST['truck_no'];
  $date=$_POST['date'];
  $from=$_POST['from'];
  $to=$_POST['to'];
  $address=$_POST['address'];
  $name=$_POST['name'];
  $contact=$_POST['contact'];
  $weight=$_POST['weight'];
  $rate_permit=$_POST['rate_permit'];
  $total_fraight=$_POST['total_fraight'];
  $advance=$_POST['advance'];
  $balance=$_POST['balance'];
  $w_charge=$_POST['w_charge'];
  $claim=$_POST['claim'];
  $truck_owner=$_POST['truck_owner'];
  $driver_name=$_POST['driver_name'];
  


    $sqlquery = "INSERT INTO `tripdetails`(`trip_no`,`truck_no`,`date`,`from`,`to`,`address`,`name`,`contact`,`weight`,`rate_permit`,`total_fraight`,`advance`,`balance`,`w_charge`,`claim`,`truck_owner`,`driver_name`) 
         VALUES ('$trip_no','$truck_no','$date','$from','$to','$address','$name','$contact','$weight','$rate_permit','$total_fraight','$advance','$balance','$w_charge','$claim','$truck_owner','$driver_name')";
	


  $result=mysql_query($sqlquery);
 // $row=mysql_fetch_assoc($result);
   // $count = mysql_num_rows($result>0);
	
	
	if($result)
  
 
  {
    
    
       header('Location: dhaval.php?msg=success');
  }
  else
  {
    echo "not";
  }
}






?>