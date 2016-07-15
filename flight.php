
<?php
include 'blogic.php';
include 'header.php';
$msg="";
if(isset($_REQUEST['Search']))
        {
     $days= date('l', strtotime($_REQUEST['date']));
    
    $qry="SELECT Number, flights.Source, flights.Destination, flights.Day, flights.Time, flights.ATime, flights.Price from flights where Source='$_REQUEST[Source]' and Destination='$_REQUEST[Destination]' and Number in (select Number from days where days='$days')";
     $res= executequery($qry);   
      
 if(mysql_affected_rows()>0)
 {
     echo "<table width='100%' border='1'>";
          echo "<tr><th>Number</th><th>Source</th><th>Destination</th><th>Day</th><th>Time</th><th>ATime</th><th>Price</th></tr>";
     while($row=  mysql_fetch_array($res))
     {
         echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>";
         $d="select days from days where Number=$row[0]";
         $res1=  executequery($d);
         while($r= mysql_fetch_array($res1))
         {
             echo $r[0]." ";
         }
         echo "</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td></tr>";
      
     }
     echo "</table>";
 }
 else {
        echo "<h3>No matching Flights...</h3>";
    }
      }
      include 'footer.php'
 ?>
<html>
    <body background="back.jpg"></body>
    
</html>
 