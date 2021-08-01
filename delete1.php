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
<?php include 'menu.php';?>
<div id="course" class="container-1">
<p>
<center><fieldset style="background-color: #eae8fd;width: 100%;margin-top: -20px;height: 450px;border: 0px;"><br><br>
<br><br><br><br>
<?php
//$as=$_SESSION['ac'];
//$_SESSION['accc']=$as;
$acc=$_POST['acc'];
$dw=0;
include("connect.php");
$sql=mysqli_query($conn,"SELECT * from class where email='$acc'");
while ($fet=mysqli_fetch_array($sql)) {
	if ($acc==$fet['email']) {
		$dw=1;
	}
}
if ($dw==1) {
$upd=mysqli_query($conn,"DELETE from class where email='$acc'");
$up=mysqli_query($conn,"DELETE from account where email='$acc'");
        if($upd and $up)
       {
       	//header("location:update1.php");
     echo "Information of student deleted successfully!!!";
      }
	 else
	echo "Information of student is not deleted!!,try again!!!";
}
else
{
	echo "Entered email ($acc) is not found in database!!!";
}

?>
</fieldset></center></p></div>
</body>
</html>
