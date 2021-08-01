<?php
session_start();
if(!isset($_SESSION['name']))
{
header("location:index.php");
}
$as=$_SESSION['acy'];
$_SESSION['accc']=$as;
$eecode=$_POST['eecode'];
$fname=$_POST['fname'];
$lstnam=$_POST['lstnam'];
$statu=$_POST['statu'];
$sxy=$_POST['sxy'];
$ag=$_POST['ag'];
$qualif=$_POST['qualif'];
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
<?php include 'menu.php';?>
<div id="course" class="container-1">
<p>
<center><fieldset style="background-color: #eae8fd;width: 100%;margin-top: -20px;height: 450px;border: 0px;"><br><br>
<br><br><br><br>
<?php
include("connect.php");
$upd=mysqli_query($conn,"UPDATE class set fname='$eecode',lname='$fname',email='$qualif',sex='$lstnam',age='$statu',level='$sxy',class='$ag' where email='$qualif'");
        if($upd)
       {
    echo "Information of $eecode $fname updated!!<br><br>";
     }
	 else
	 echo"error".mysql_error();


?>
</body>
</html>
