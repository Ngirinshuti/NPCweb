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
include "menust.php";
?>
<div id="course" class="container-1">
<p>
<center><fieldset style="background-color: #eae8fd;width: 100%;margin-top: -20px;height: 450px;border: 0px;"><br><br>
<br><br><br><br>
<?php
$fst=$_SESSION['uses'];
$eml=$_SESSION['emai'];
include("connect.php");
$subject=$_POST['subject'];
$text=$_POST['text'];
$type='student';
$insert=mysqli_query($conn,"INSERT into contact values(null,'$eml','$subject','$text','$type')");
if ($insert) {
echo "You have replied to a message!<br><br><br><br><br>";
}
else
{
	echo "Your idea is not Sent!";
}
?>
</fieldset></center></p></div></body></html>