<?php
$x=$_GET['email'];
include 'blogic.php';
$res=ExecuteQuery("select * from signup where emailid='$x'");
if(mysql_affected_rows()>0)
{
echo "user exist";
}
else 
{
        echo "user not exist";
}
?>