<?php
session_start();
$msg="";
include 'blogic.php';
if(isset($_REQUEST['login']))
{
    $qry="select ID,fname,emailid,password from signup where emailid='$_REQUEST[txt_email]' and password='$_REQUEST[txt_pwd]'";
    $res=  executequery($qry);
            if(mysql_affected_rows()>0)
            {
                $row=  mysql_fetch_assoc($res);
               $_SESSION['email']=$row['emailid'];
                $_SESSION['id']=$row['ID'];
             if(isset($_REQUEST['rem']))
            { 
            setcookie("MyCookie",$row['emailid'],time()+60*1);
            setcookie("MyCookie1",$row['password'],time()+60*1);
            }
            header("location:showrecord.php");
            }
 else {
     $msg="<font color=red>Invalid Username and password</font>";
 }
}
?>
<html>
	<head>
	<title>Website</title>
        <script>
            function validate()
            {
            flag=0;
            if(document.getElementById("eid").value=="")
            {
                document.getElementById("d1").innerHTML="Username Cannot be Blank";
                flag=1;
            }
             if(document.getElementById("pid").value=="")
            {
                document.getElementById("d2").innerHTML="Password Cannot be Blank";
                flag=1;
            }
            if(flag==0)
                return true;
            else 
                return false;
            }
            
            </script>
	</head>
<body background="back.jpg">
    <center>
        <form method="post" onsubmit="return validate()">
    <table width="80%">
	<tr>
            <td valign="top"><?php include 'header.php'; ?></td>
        </tr>
        <tr>
            <td valign="center" valign="top">
                <center><table width="60%" border="1" >
                    <caption><h1>USER LOGIN</h1></caption>
                            <tr><td valign="top"><label>Email</label></td>
                            <td valign="top"><input type="text" Id="eid" name="txt_email"/></td>
                            <td><div id="d1"></div></td>
                            </tr>
                            <tr>
                            <td valign="top"><label>Password</label></td>
                            <td valign="top"><input type="password" Id="pid" name="txt_pwd" /></td>
                            <td><div id="d2"></div></td>
                      </tr>
                            <tr>
                            <td valign="top" colspan="3"><input type="checkbox" name="rem" value="ON" /> Remember Me</td>
                            
                        </tr>
                        <tr>
                         
                            <td valign="center" colspan="2"><input type="submit" value="Login" name="login" /></td>
                      
                        </tr>
                        <tr>
                            <td colspan="2">
                                <?php echo $msg; ?>
                            </td>
                        </tr>
                    </table></center>
                
            </td>
        </tr>
        <tr>
            <td valign="top"><?php include 'footer.php'; ?></td>
        </tr>
    </table>
</form>
</body>
</html>