<?php
   include '../dbconnect.php';
$a=$_POST['invoice_no'];

   $sql=mysql_query("delete * from `tripdetails` where invoice_no LIKE '$a'");

    if($sql)
    {
    	header('location:viewTrips.php?msg=suc');
    }
    else
    {
    	echo "not";
    }

    ?>