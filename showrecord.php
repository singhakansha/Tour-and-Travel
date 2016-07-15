<?php
session_start();
include 'blogic.php';
if(!isset($_SESSION['email']))
{
    header("location:login.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

    </head>
    <body background="back.jpg">
    <center>
        <table width='100%'>
            <tr>
                <td valign='top'><?php include('header.php'); ?></td>
            </tr>
            <tr>
                <td valign='top'>
                    <?php
                    $qry="select * from signup where emailid='$_SESSION[email]'";
                    $res=  executequery($qry);
                    if(mysql_affected_rows()>0)
                    {                        
                        echo "<table width='100%' border='1'>";
                        echo "<tr><th>First name</th><th>Last Name</th><th>Date of birth</th><th>Gender</th><th>emailid</th><th>fathername</th><th>Password</th></tr>";
                        while($row=  mysql_fetch_array($res))
                        {
                            echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
                        }
                        echo "</table>";
                    }
                    else 
                    {
                        echo "<h3>No Record Found...</h3>";
                    }
                   ?>
                </td>
            </tr>
            <tr>
                <td valign='top'><?php include 'footer.php'; ?></td>
            </tr>
        </table>
    </center>
    </body>
</html>
