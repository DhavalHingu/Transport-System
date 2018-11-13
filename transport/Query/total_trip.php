<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type=text/css>
      .rounded_edges {
        -moz-border-radius: 5px ;
        border-radius: 5px ;
        border: 1px solid blue;

      }
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
  


  $a=$_POST['trip'];


  if(isset($_POST['submit']))
  {
    $result=mysql_query("select * from tripdetails where trip_no LIKE '$a' " );
  echo "<br>";
  echo "<b>"; echo "<h1>"; echo " Complete Trip Details Of "; echo $a; echo "</h1>"; echo "</b>";  
while($row=mysql_fetch_array($result))
{
    
  echo "<table class='rounded_edges' cellspacing=15; cellpadding=10 bordercolor=Blue bgcolor=#f4f7f8>";
  echo "<tr>";
  echo "<td>";
  echo "<b>";echo "Invoice No: "; echo "</b>";
  
 echo "<b>";echo $row['invoice_no'];echo "</b>";
echo "</td>";
echo "<td>";
echo "<b>";echo "Party Name: ";echo "</b>";
    echo "<b>";echo $row['name'];echo "</b>";  
echo "</td>"; 
echo "<td>";
echo "<b>";echo "Total Fraight: ";echo "</b>";   
    echo "<b>";echo $row['total_fraight'];echo "</b>";
echo "</td>";    
echo "<td>";
echo "<b>";echo "Advance: ";echo "</b>";    
    echo "<b>";echo $row['advance'];echo "</b>";
echo "</td>";    
echo "<td>";  
echo "<b>";echo "Balance: ";echo "</b>";  
    echo "<b>";echo $row['balance'];echo "</b>";
echo "</td>";    
       echo "</tr>";
    echo "</table>"; 
 

 $b= $row['invoice_no'];
  $c=$row['name'];
  $d=$row['total_fraight'];
  $e=$row['advance'];
  $f=$row['balance'];
    
$abc=mysql_query("(SELECT SUM(total_fraight) as invoice_total FROM tripdetails)");
  

echo "<br>";    
}
//INSERTecho "</b>"; INTO add("SELECT trip_no,SUM(total_fraight) as total 
//FROM tripdetails 
//WHERE trip_no = 111
//GROUP BY trip_no");
  

  // while(mysql_fetch_array($bc))
  // {
   
   //}




?>
<html>
<head>
</head>
<body>

<form method="post" action="#">
  <input type="hidden" value="total">
  </form>
 </body>
</html>

<?php

  }

   $abc=mysql_query("(SELECT SUM(total_fraight) as invoice_total FROM tripdetails where trip_no LIKE '$a')");


  if(!$abc)
   {
    echo "not";
   }
   
while($row=mysql_fetch_array($abc))
{
  echo "<tr>"; echo "Total Balance: ";
  echo "<td> <b>".$row['invoice_total']."</b> </td>";
}
echo "<br>";
$abc1=mysql_query("(SELECT SUM(advance) as invoice_total FROM tripdetails where trip_no LIKE '$a')");


  if(!$abc1)
   {
    echo "not";
   }
   
while($row=mysql_fetch_array($abc1))
{
  echo "<tr>"; echo "Total Advance: ";
  echo "<td> <b>".$row['invoice_total']."</b> </td>";
}
echo "<br>";
$abc2=mysql_query("SELECT SUM(balance) as invoice_total FROM tripdetails where trip_no LIKE '$a'");


  if(!$abc2)
   {
    echo "not";
   }
   
while($row=mysql_fetch_array($abc2))
{
  echo "<tr>"; echo "Total Due Amount: ";
  echo "<td> <b>".$row['invoice_total']."</b> </td>";
}
echo "<br>";
$sql=mysql_query("SELECT (sum(tripdetails.total_fraight)-expenses.total) AS addition  FROM tripdetails 
INNER JOIN expenses ON tripdetails.trip_no  = expenses.trip_no where expenses.trip_no LIKE '$a' GROUP by tripdetails.trip_no ");

   if(!$sql)
   {
    echo "not";
   }
   

while($row=mysql_fetch_array($sql))
{
  echo "<tr>"; echo "Total Benifit(Total Balance - Expenses): ";
  echo "<td> <b>".$row['addition']."</b> </td>";
echo "</tr>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<b>";
echo "Trip P&L : Total  "; echo $row['addition'];
echo "</b>";
}
 
$d=mysql_query("(SELECT SUM(balance) as invoice_total FROM tripdetails where trip_no LIKE '$a')");


  if(!$d)
   {
    echo "not";
   }
   
while($row=mysql_fetch_array($d))
{
  echo "<b>";
  echo " With Due Of   "; echo $row[ 'invoice_total'];
  echo "</b>";
}   

  ?>
