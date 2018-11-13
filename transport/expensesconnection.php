<?php
include 'dbconnect.php';

    if (isset($_POST['submit'])){
    	$trip_no=$_POST['trip_no'];
    	$diesel=$_POST['diesel'];
    	$way=$_POST['way'];
    	$toll_tax=$_POST['toll_tax'];
    	$road_repairs=$_POST['road_repairs'];
    	$foods=$_POST['foods'];
    	$general=$_POST['general'];
    	$driver=$_POST['driver'];
        $cleaner=$_POST['cleaner'];
        $telephone=$_POST['telephone'];
        $loading=$_POST['loading'];
        $unloading=$_POST['unloading'];
        $others=$_POST['others'];
        $total=$_POST['total']; 

           $sqlquery = "INSERT INTO `expenses`(`trip_no`,`diesel`,`way`,`toll_tax`,`road_repairs`,`foods`,`general`,`driver`,`cleaner`,`telephone`,`loading`,`unloading`,`others`,`total`) 
         VALUES ('$trip_no','$diesel','$way','$toll_tax','$road_repairs','$foods','$general','$driver','$cleaner','$telephone','$loading','$unloading','$others','$total')";
	

$result=mysql_query($sqlquery);
 // $row=mysql_fetch_assoc($result);
   // $count = mysql_num_rows($result>0);
	
	
	if($result)
  
 
  {
    
    
       header('Location: expenses.php?msg=success');
  }
  else
  {
    echo "not";
  }
}
?>