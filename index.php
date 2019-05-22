<?php 

session_start();
mysql_connect("localhost","root","");
mysql_select_db("reg");
if(isset($_REQUEST["submit"]))
{
$mail=$_REQUEST["mail"];
$pass=$_REQUEST["pass"];
$query=mysql_query("select * from user where email='$mail' && password='$pass'");
$rowcount=mysql_num_rows($query);
if($rowcount==true)
{
$_SESSION["mail2"]=$mail;
header('location:welcome.php');
}
else
{
echo "your email and password is wrong";
}
}
?>








<body bgcolor="lightgreen">
<p align="center"> HELLO GUYS! WELCOME TO LibSys.</p>
<br>
<br>
<p align="center">Please enter the email-id you registered with and the appropriate password you assigned to your account.</p>
<form method="post">
<table border="2" align="center" width="70%" height="70%">
<tr>
<td align="center" width="50%">E-mail:</td>
<td align="center" width="50%"><input type="text" name="mail"></td>
</tr>
<tr>
<td align="center" width="50%">Password:</td>
<td align="center" width="50%"><input type="password" name="pass"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Login" name="submit"></td>
</tr>
</table>
</form>
<p align="center"> If you don't have an account, <a href="newest.php">Register Here.</a></p>
</body>