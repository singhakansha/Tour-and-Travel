<?php
include 'blogic.php';
$msg="";
if(isset($_REQUEST['btn_submit']))
        {
     $qry="insert into signup(fname,lname,dob,gender,emailid,fathername,password,confirm_pass) values('$_REQUEST[txt_fname]','$_REQUEST[txt_lname]','$_REQUEST[txt_dob]','$_REQUEST[gender]','$_REQUEST[txt_email]','$_REQUEST[txt_faname]','$_REQUEST[txt_pwd]','$_REQUEST[txt_cpwd]')";
     executenonquery($qry);   
 if(mysql_affected_rows()>0)
 {
     $msg="<font color=red>Record inserted....</font>";
 }
 else
     {
     $msg="<font color=red >Error in inserting record....</font>";
}

    }
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body background="back.jpg">
    <center>
     <form>
         <table width='100%'>
    <tr>
                <td valign='top'><?php include('header.php'); ?></td>
            </tr>
            <tr>
                <td valign='top' align="center">
                    <table width="60%" style="color:black" border="1">
	<tr>
		<td><lable>First Name</lable></td>
		<td><input type="text"  name="txt_fname" /></td>
                      
                 
		<td><lable>Last Name</lable></td>
		<td><input type="text" name="txt_lname" /></td>
	</tr>
	<tr>
		<td><lable>Date of Birth</lable></td>
		<td><input type="text" name="txt_dob" /></td>
		<td><lable>Gender</lable></td>
		<td><input type="radio" name="gender" /> Male
		    <input type="radio" name="gender" /> Female</td>
	</tr>
	<tr>
		<td><lable>Email Id</lable></td>
		<td><input type="email" name="txt_email" /></td>
		<td><lable>Father Name</lable></td>
		<td><input type="text" name="txt_faname"  /></td>
	</tr>
	<tr>
		<td><lable>Password</lable></td>
		<td><input type="password" name="txt_pwd" /></td>
		<td><lable>Confirm Password</lable></td>
		<td><input type="Password" name="txt_cpwd" /></td>
	</tr>
	<tr>
		<td colspan="4"><input type="checkbox" name="chk_remember"/>Remember me.</td>
		
	</tr>
	<tr>
		<td colspan="4"><input type="checkbox" name="chk_agree"/> I agree to the Terms of Use and Privacy Policy.</td>
		
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="btn_submit" value="Create Account"/></td>
                <td align="right" colspan="2"><a href="loggedin.php">Already Registered?Login</a></td>
        </tr>
        <tr>
            <td colspan="7">
                <?php
                if(isset($_GET['btn_submit']))
                {
                    echo $msg;
                }
                ?>
            </td>
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

