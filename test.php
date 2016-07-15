<?php
include 'blogic.php';
include 'header.php';
$msg="";
if(isset($_REQUEST['Search_Trains']))
        {
     //$qry="select Source,Destination,Day,Trainname,Depart,Arrive,Fare from trains where Source='$_REQUEST[Source]' and Destination='$_REQUEST[Destination]'";
    //  echo $d;
     $day= date('l', strtotime($_REQUEST['Departuredate']));
    
    $qry="SELECT trainno,trains.Source,trains.Destination,trains.Trainname,trains.Depart,trains.Arrive,trains.Fare FROM trains where Source='$_REQUEST[Source]' and Destination='$_REQUEST[Destination]' and trainno in (select trainno from day where day='$day')";
     $res= executequery($qry);   
      
 if(mysql_affected_rows()>0)
 {
     echo "<center><table width='70%' border='1'>";
     echo "<tr><td>Train No</td><th>Source</th><th>Destination</th><th>Date</th><th>Train Name</th><th>Depart</th><th>Arrive</th><th>Fare</th></tr>";
     while($row=mysql_fetch_array($res) )
     {
        
         echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>";
         $d="select day from day where trainno=$row[0]";
         $res1=  executequery($d);
         while($r=mysql_fetch_array($res1))
         {
             echo $r[0]." ";
         }
         echo "</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td></tr>";
      
     }
     echo "</table></center>";
 }
 else {
        echo "<h3>No matching Trains...</h3>";
    }
      }
      include 'footer.php'
 ?>
<html>
    <body background="back.jpg"></body>
    
</html>