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
<?php 
include "menu.php";
?>
<div id="course" class="container-1">
<p>
<center><fieldset style="background-color: #eae8fd;width: 100%;margin-top: -20px;height: 450px;border: 0px;"><br><br>
<br><br><br><br><h2><font color="green">Update student information</font></h2>
<form method="post" action="update.php" enctype="multipart/form-data" >
	<br><br><br>
Student email:<input type="email" name="acc" size="40" /><br><br>
<input type="submit" value="UPDATE" />
<input type="reset" value="RESET"/>
</form><br><br><br><br>
</fieldset> </center></p>
</div></div>
</body>
</html>
