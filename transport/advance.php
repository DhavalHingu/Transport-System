<?php
include 'dbconnect.php';

    if (isset($_POST['submit'])){
   $invoice=$_POST['invoice'];
  $name=$_POST['name'];    
  $rc1=$_POST['rc1'];
  $rc2=$_POST['rc2'];
  $rc3=$_POST['rc3'];
  $rc4=$_POST['rc4'];
  
    




  //$sqlquery="update tripdetails set receive1='$rc1',receive2='$rc2',receive3='$rc3',receive4='$rc4' advance=advance-receive1 where name LIKE '$name'";
$sqlquery="update tripdetails set receive1='$rc1',receive2='$rc2',receive3='$rc3',receive4='$rc4', advance=(advance+receive1),advance=(advance+receive2),advance=(advance+receive3),advance=(advance+receive4) ,balance=(total_fraight-advance) where invoice_no LIKE '$invoice'";

  $result=mysql_query($sqlquery);
 // $row=mysql_fetch_assoc($result);
   // $count = mysql_num_rows($result>0);
	
	
	if($result)
  
 
  {
    
    
       header('Location: due.php?msg=success');
  }
  else
  {
    echo "not";
  }
}





?>