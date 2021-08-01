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
if(!isset($_SESSION['name']))
{
header("location:index.php");
}

?>
<?php 
include "menust.php";
?>
<div id="course" class="container-1">
<p>
<center><fieldset style="background-color: #eae8fd;width: 100%;margin-top: -20px;height: 450px;border: 0px;"><br><br>
<?php
$fst=$_SESSION['uses'];
$eml=$_SESSION['emai'];
include("connect.php");
$dis=mysqli_query($conn,"select * from class where email='$eml'");
if($dis)
{
echo"<center><br><h3 style='margin-top:-50px;'> information about $fst</h3><br>";
echo"<table border=0 bgcolor=skyblue heigth=50% width=50% style='margin-top:-35px;'> ";
while($ft=mysqli_fetch_array($dis))
{
$a= $ft['fname'];
$b=$ft['lname'];
$c=$ft['sex'];
$d=$ft['age'];
$e=$ft['level'];
$f=$ft['class'];
$g=$ft['email'];
$i=$ft['year'];
$j=$ft['rgno'];
$l=$ft['picture'];
echo"<tr><td colspan=2 align=center bgcolor=brown><img src='images/$l' height='90' width='120'/></td></tr><br>";
echo"<tr><td  bgcolor=#cccccc>Firstname</td><td bgcolor=skyblue>$a</td></tr>";
echo"<tr><td bgcolor=#cccccc>Surname</td><td bgcolor=skyblue>$b</td></tr>";
echo"<tr><td bgcolor=#cccccc>sex</td><td bgcolor=skyblue>$c</td></tr>";
echo"<tr><td bgcolor=#cccccc>birth date</td><td bgcolor=skyblue>$d</td></tr>";
echo"<tr><td bgcolor=#cccccc>level</td><td bgcolor=skyblue>$e</td></tr>";
echo"<tr><td bgcolor=#cccccc>class</td><td bgcolor=skyblue>$f</td></tr>";
echo"<tr><td bgcolor=#cccccc>email address</td><td bgcolor=skyblue>$g</td></tr>";
echo"<tr><td bgcolor=#cccccc>year</td><td bgcolor=skyblue>$i</td></tr>";
echo"<tr><td bgcolor=#cccccc>reg_number</td><td bgcolor=skyblue>$j</td></tr>";
echo"</table>";

echo"</center>";
}
?>
<center><input type="button" value="print" onclick="window.print()">
<br /><br />
<?php
}
else
{
echo"no".mysql_error();
}
?>
</fieldset></center></p></div>
</body>
</html>
