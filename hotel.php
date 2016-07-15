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
        <script>
            function getcity(str)
            {
               
    htt=new XMLHttpRequest();
    htt.open("get","getcity.php?state="+str,true);
    htt.send();
    htt.onreadystatechange=function()
    {
        if(htt.readyState==4&& htt.status==200);
            {
                document.getElementById("city1").innerHTML=htt.responseText;
            }
    }
            }
  </script>

	</head>
<body text="darkblue" background="back.jpg">
<center>
<form action="hotelp.php" >
<h1 align="center">Search For Hotels</h1>
<table width='100%'>
    <tr>
                <td valign='top'><?php include('header.php'); ?></td>
            </tr>
            <tr>
                <td valign='top' align="center">
    <table width="60%" style="color:black" border="1">         
<tr>
 <td><label>STATE</label>
     <select name="state" onchange="getcity(this.value)">
       <option>WestBengal</option>
       <option>Orissa</option>
        <option>Himachal Pradesh</option>
        <option>Uttar Pradesh</option>
    </select></td>
    <td><label>CITY</label>
   <select name="city" id="city1">
       
       
    </select></td>
</tr>
<tr>
<td><label>Check in Date:</label>
<input class="mystyle" type="date" name="checkin" value="checkin" /></td>
<td><label>Check out Date:</label>
<input class="mystyle" type="date" name="checkout" value="checkout" /></td>
</tr>
<tr>
<td><label>No. of rooms:</label>
<input class="mystyle" type="text" name="no"/></td>
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



    