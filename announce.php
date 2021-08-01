<?php
session_start();

if(!isset($_SESSION['name']))
{
header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="stylee.css">
<title>NATIONAL POLICE COLLEGE</title>
</head>

<body background="npc.png">
  <?php include "menu.php" ?>
<div id="course" class="container-1">
<p>
<center><form method="POST" action="sendnew.php">

  <fieldset style="background-color: #eae8fd;width: 100%;margin-top: -20px;height: 450px;border: 0px;">
<img src='npclogo.png' style="width: 30%;height: 9cm;float: right;">
	<fieldset style="margin-left: 8.5cm;width:40%;height: 10.5cm;border: 0px;">
	<br><br><h2 style="color: #63d12e;">Send an announcement</h2><br><br>
	<input type="hidden" name="subject" value="ANNOUNCEMENT">
<table><tr><textarea style="height: 4cm;width: 10cm; box-shadow: 1px 1px 1px 3px black; text-align: center;font-size: 25px;"placeholder=" type announcement here!!" name="text" required></textarea></tr></table><table><tr><td><input type="submit" name="submit"class="button" value="submit" style="background: green; width: 2cm;height: 1cm;border-radius: 0.2cm">
<input type="reset"value="reset"class="button"name="reset" style="margin-left: 3cm;background: green; width: 2cm;height: 1cm;border-radius: 0.2cm">
</td></tr></table></fieldset>
<img src='npclogo.png' style="width: 30%;height: 9cm;float: left;margin-top: -10.5cm;"><center><font color="green"><p> &copy; National Police College </p></font></center>
</fieldset>
</form></center></p></div>
</body>
</html>