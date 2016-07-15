<?php
include 'blogic.php';
include 'header.php';
$msg="";
if(isset($_REQUEST['Search']))
{    
    $qry="Select state,city,name,price from location where state='$_REQUEST[state]' and city='$_REQUEST[city]'";
    
    $res=executequery($qry);   
 if(mysql_affected_rows()>0)
 {
      
     echo "<table width='100%' border='1' >";
     echo "<tr><th>state</th><th>city</th><th>name</th><th>price</th></tr>";
     while($row=mysql_fetch_array($res))
     {
         echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
     }
     echo "</table>";
     }
 else {
        echo "<h3>No matching Hotels...</h3>";
    }
}
     include 'footer.php'
 ?>
<html>
    <body background="back.jpg"></body>
    
</html>
