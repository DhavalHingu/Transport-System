<!DOCTYPE html>
 <html>
 <head>
   <title></title>
    <style type=text/css>
      .rounded_edges {
        -moz-border-radius: 5px ;
        border-radius: 5px ;
        border: 1px solid blue;
</style>
 </head>
 <body>
    <a href="../view.php">Back</a> |
<a href="../Home.php">Home</a> |
<a href="../dhaval.php">Add Trip</a> |
<a href="../dhaval1.php">Add Employee</a>
 </body>
 </html>
<?php
 require_once '../dbconnect.php';
   $sql=mysql_query("SELECT(sum(tripdetails.total_fraight) - expenses.total) AS addition  , expenses.trip_no as No FROM tripdetails 
INNER JOIN expenses ON tripdetails.trip_no  = expenses.trip_no group by tripdetails.trip_no ");
   if(!$sql)
   {
   	echo "not";
   }
   if(mysql_num_rows($sql)>0)
    {
      echo "<center>";
     echo "<table class='rounded_edges' cellspacing=15; cellpadding=15 bordercolor=Blue bgcolor=#f4f7f8  >
 <tr>
 <th>Trip No</th>
 <th>Total Income</th>
 </tr>";


while($row=mysql_fetch_array($sql))
{
  $total +=$row['addition'];
  echo "<tr>";
  echo "<td>".$row['No']."</td>";
  echo "<td>".$row['addition']."</td>";

  echo "</tr>";
   

}
echo "<tr>";
echo  "<th></th>";
 echo   "<th></th>
    <th></th>";
 echo "<th> Total </th>";
 echo "<th> $total</th>";
 echo "</tr>";
echo "</table>";
echo "</center>";
}


   
 ?>
 