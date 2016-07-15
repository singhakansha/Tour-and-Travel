<?php
session_start();
include 'blogic.php';
if(!isset($_SESSION['email']))
{
    header("location:login.php");
}
?>
<htmL>
<head>
<title></title>
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
<body text="darkblue" background="back.jpg">
<center>
<form action="test.php">
<h1 align="center">IRCTC Indian Railways Tickets</h1>
<table width='100%'>
    <tr>
                <td valign='top'><?php include('header.php'); ?></td>
            </tr>
            <tr>
                <td valign='top' align="center">
    <table width="60%" style="color:black" border="1">         
<tr>
<td><label>Source:</label>
   <select name="Source">
        <option>Lucknow-lko</option>
        <option>Bhubaneswar-bbs</option>
        <option>New Delhi-ndls</option>
        <option>Kanpur-cnb</option>
        <option>Howrah-hwh</option>
        <option>Kolkata-cp</option>
    </select></td>
<td><label>Destination:</label>
<select name="Destination">
        <option>Lucknow-lko</option>
        <option>Bhubaneswar-bbs</option>
        <option>New Delhi-ndls</option>
        <option>Kanpur-cnb</option>
        <option>Howrah-hwh</option>
        <option>Kolkata-cp</option>
    </select></td>
</tr>
<tr>
<td><label>Day:</label>
    <input type="date" name="Departuredate" value="Departuredate" /></td>
<td><label>Class</label>
    <select name="class">
        <option>Sleeper Class</option>
        <option>Third AC</option>
        <option>Second AC</option>
        <option>First AC</option>
        <option>Second Sitting</option>
    </select>
    </td>
</tr>
<tr>
<td><input class="mystyle" type="submit" name="Search_Trains" value="Search Trains" ></td>
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