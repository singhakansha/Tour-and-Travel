<?php
include 'blogic.php';
$res=executequery("select city from location where state='$_REQUEST[state]'");
echo "<option>Select city</option>";
while ($r=mysql_fetch_array($res))
{
    echo "<option>$r[0]</option>";
}
?>