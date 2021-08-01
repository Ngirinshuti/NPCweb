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
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$nemail=$_POST['nemail'];
$usname=$_POST['usname'];
$npwd=$_POST['npwd'];
$cpwd=$_POST['cpwd'];
$y=0;
include("connect.php");
$user=mysqli_query($conn," SELECT * from account where email='$email'");
while($pas=mysqli_fetch_array($user))
{
if($email==$pas['email'] and $pwd==$pas['password'])
{
$y=1;
$id=$pas['id'];
break;
}
}
if($y==1)
{
  $user1=mysqli_query($conn," SELECT * from class where email='$email'");
while($pas1=mysqli_fetch_array($user1))
{
if($email==$pas1['email'])
{
$yi=1;
$id1=$pas1['rgno'];
}
}
if($npwd!=$cpwd)
{
echo" new password must be the same as the conform password";
}
else if($npwd==$username or $npwd==$nemail)
{
echo" do not use your username or email as your password";
}
else
{
$upd=mysqli_query($conn,"update account set email='$nemail',username='$usname',password='$npwd' where id='$id'");
$updy=mysqli_query($conn,"update class set email='$nemail' where rgno='$id1'");
        if($upd)
       {
      echo"Account information updated correctly!!";
     }
   else
   {
   echo"error".mysql_error();
}


}
}

else
{
echo" entered user does not exist";
}

?>
<br /><br /></fieldset></center></p></div>
</body>
</html>
