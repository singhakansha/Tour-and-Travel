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
<title>Flights</title>
<style>
		.mystyle
		{
			border-color:black;
			color:black;
			border-radius:20px;
		}
		.mystyle:hover
		{
		border-color:black;
		}
		.mystye:hover
		{
		border-color:black;
		border-radius:20px;
		}
	</style>
	</head>
<body text="darkblue"  background="back.jpg">
<center>
<form action="flight.php">
<h1 align="center">Book Domestic & International Flight Tickets</h1>
<table width="100%" style="color:black">
    <tr>
                <td valign='top'><?php include('header.php'); ?></td>
            </tr>
            <tr>
                <td valign='top' align="center">
                    <table width="60%" style="color:black" border="1">   
<tr>
<td><label>FROM:</label>
   <select name="Source">
        <option>Lucknow</option>
        <option>Bhubaneswar</option>
        <option>Delhi</option>
        <option>Kolkata</option>
        <option>Shimla</option>
    </select></td>
<td><label>TO:</label>
<select name="Destination">
        <option>Lucknow</option>
        <option>Bhubaneswar</option>
        <option>Delhi</option>
        <option>Shimla</option>
        <option>Kolkata</option>
    </select></td>
</tr>
<tr>
<td><label>Date:</label>
<input class="mystyle" type="date" name="date"/></td>
<td><label>Adult:(12+yrs)</label>
<input class="mystyle" type="text" name="txt2" /></td>
<td><label>Child:(22-11yrs)</label>
<input class="mystyle" type="text" name="txt3" /></td>
<td><label>Infant:(0-2yrs)</label>
<input class="mystyle" type="text" name="txt4" /></td>
</tr>
<tr>
<td><label>CLASS:</label>
<select name="class"><option value="Economy">Economy</option>
				<option value="Premium Economy">Premium Economy</option>
				<option value="Business">Business</option></select></td>
</tr>
<tr>
<td><input class="mystyle" type="submit" name="Search" value="Search"/></td>
</tr>
</table>
                         </td>
            </tr>
            <tr>
                <td valign='top'><?php include 'footer.php'; ?></td>
           </tr>
</table>
</form>
</center>
</body>
</html>