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
<center><fieldset style="background-color: #eae8fd;width: 80%;margin-top: -20px;height: 450px;border: 0px;"><br><br>
<br><br><br><br>
<?php
include("connect.php");
$first=$_POST['first'];
$surn3=$_POST['surn3'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$level=$_POST['level'];
$faculty=$_POST['faculty'];
$email=$_POST['email'];
$st='NPC';
$dw=0;
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"]== "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 900000000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
	
    }
  else
    {
	
    /*if (file_exists("images/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      */
	
					
      
     $fn=$_FILES["file"]["name"];
	 $y=date('Y');
    

	 $num=mysqli_num_rows(mysqli_query($conn,"select * from class"));
	 
$num=$num+1;
	$ac=$st.$num;
	
					      move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/" . $_FILES["file"]["name"]);
  $sqp=mysqli_query($conn,"SELECT * from class where email='$email'");
while ($fetp=mysqli_fetch_array($sqp)) {
  if ($email==$fetp['email']) {
    $dw=1;
  }
}
if ($dw!=1) {
$insert=mysqli_query($conn,"INSERT into class values('$ac','$first','$surn3','$email','$sex','$age','$level','$faculty','$y','$fn')");
if($insert)
{
$dis=mysqli_query($conn,"select * from class where rgno='$ac'");
echo"<center>";
echo"<table border='0' bgcolor=skyblue heigth=50% width=50% style='margin-top:-50px;'><caption> student card</caption>";
while($ft=mysqli_fetch_array($dis))
{
$a= $ft['rgno'];
$b=$ft['fname'];
$c=$ft['lname'];
$ce=$ft['email'];
$d=$ft['sex'];
$e=$ft['age'];
$f=$ft['level'];
$g=$ft['class'];
$h=$ft['year'];
$l=$ft['picture'];
echo"<tr><td colspan=2 align=center bgcolor=brown><img src='images/$l' height='90' width='120'/></td></tr><br>";
echo"<tr><td  bgcolor=#cccccc>REG_NYMBER:</td><td bgcolor=#cccccc>$a</td></tr>";
echo"<tr><td bgcolor=#cccccc>FIRST NAME:</td><td bgcolor=#cccccc>$b</td></tr>";
echo"<tr><td bgcolor=#cccccc>SECOND NAME:</td><td bgcolor=#cccccc>$c</td></tr>";
echo"<tr><td bgcolor=#cccccc>EMAIL:</td><td bgcolor=#cccccc>$ce</td></tr>";
echo"<tr><td bgcolor=#cccccc>SEX:</td><td bgcolor=#cccccc>$d</td></tr>";
echo"<tr><td bgcolor=#cccccc>DATE OF BIRTH:</td><td bgcolor=#cccccc>$e</td></tr>";
echo"<tr><td bgcolor=#cccccc>LEVEL:</td><td bgcolor=#cccccc>$f</td></tr>";
echo"<tr><td bgcolor=#cccccc>CLASS:</td><td bgcolor=#cccccc>$g</td></tr>";
echo"<tr><td bgcolor=#cccccc>ACADEMIC YEAR:</td><td bgcolor=#cccccc>$h</td></tr></table>";

echo"</center>";
}
}
else {
   echo "not inserted".mysqli_error($conn);
  }	
}
else
{
  echo "This email ($email) is used by another user,try different one!<br><br><br><br><br><br><br>";

 //header("location:new1.php");
  //include "new1.php";
}
}
}
else
{
echo"please  browse a valid image";
}
?>
<input type="button" value="print" onclick="window.print()">
</fieldset>
</center>
</p></div></div><div id="divfooter"><center><font color="white"><p> &copy; NPC </p></font></center></div></div>
</body>
</html>
