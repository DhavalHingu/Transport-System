<?php
include 'dbconnect.php';

    if (isset($_POST['submit'])){
      
  $name=$_POST['name'];
  $age=$_POST['age'];
  $licence_no=$_POST['licence_no'];
  $licence_expiry=$_POST['licence_expiry'];
  $address=$_POST['address'];
    




    $sqlquery = "INSERT INTO `employee`(`name`,`age`,`licence_no`,`licence_expiry`,`address`) 
         VALUES ('$name','$age','$licence_no','$licence_expiry','$address')";
	


  $result=mysql_query($sqlquery);
 // $row=mysql_fetch_assoc($result);
   // $count = mysql_num_rows($result>0);
	
	
	if($result)
  
 
  {
    
    
       header('Location: dhaval1.php?msg=success');
  }
  else
  {
    echo "not";
  }
}






?>