
<?php
session_start();
if(!isset($_SESSION['name']))
{
header("location:hommepage.php");
}
$fst=$_SESSION['uses'];
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
  <?php include "menust.php" ?>
<div id="course" class="container-1">
<p>
<center><fieldset style="background-color: #eae8fd;width: 100%;margin-top: -20px;height: 450px;border: 0px;"><br><br>
<br><br><br><br><img src='npclogo.png' style="width: 30%;height: 9cm;float: right;margin-top: -2cm;">
  <img src='npclogo.png' style="width: 30%;height: 9cm;float: left;margin-top: -2cm;">
<h2><font color="green" size="6">Welcome <font color="black" size="6" style="text-transform: uppercase;"> <?php echo $fst; ?></font> </font></h2><br><b>This is NPC(National Police College) website.<br> For more information you can come to our offices!<br><br> Thank you!!</b>

<table border="0"  width="100%"> <tr> <td>
<form method="post" action="#"  enctype="multipart/form-data" >
</form></td></tr></table><center><font color="green"><p> &copy; National Police College </p></font></center></fieldset></center></p></div></body></html>