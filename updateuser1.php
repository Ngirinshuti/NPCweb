<?php
session_start();
if(!isset($_SESSION['name']))
{
header("location:index.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="stylee.css">
<title>NATIONAL POLICE COLLEGE</title>
</head>

<body background="npc.png">
  <?php include "menu.php" ?>
<div id="course" class="container-1">
<p>
<center>
<fieldset style="background-color: #eae8fd;width: 100%;margin-top: -20px;height: 450px;border: 0px;"><br><br>
<br><br><br><br>
<h2><font color="green">UPDATE USER ACCOUNT FORM</font></h2><br>

<table border="0"  width="100%" style="margin-left: 5cm;"> <tr> <td>
<form method="post" action="updateuser.php"  enctype="multipart/form-data" >
<tr><td>username</td><td><input type="text" name="username" size="40" required="" /></td></tr>
<tr><td>email</td><td><input type="email" name="email" size="40" required="" /></td></tr>
<tr><td>new username</td><td><input type="text" name="usname" size="40" required="" /></td></tr>
<tr><td>new email</td><td><input type="email" name="nemail" size="40" required="" /></td></tr>
<tr><td>old password</td><td><input type="password" name="pwd" size="40" required="" /></td></tr>
<tr><td>new password</td><td><input type="password" name="npwd" size="40" required="" /></td></tr>
<tr><td>confirm password</td><td><input type="password" name="cpwd" size="40" required="" /></td></tr>
<tr><td colspan="2"><center><input type="submit" value="UPDATE" />
<input type="reset" value="RESET"/></center></td></tr></table></td></tr></table>
</form></fieldset> </center></p>
</div></div><div id="divfooter"><center><font color="white"><p> &copy; NPC</p></font></center></div>
</body>
</html>
