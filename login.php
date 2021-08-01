<?php
session_start();
$name=$_POST['usern'];
$pwd=$_POST['pass'];
$x=0;
$y=0;
if($name||$pwd)
{
$x=0;
include("connect.php");
$select=mysqli_query($conn,"select* from account");
while($user=mysqli_fetch_array($select))
{
$_SESSION['firt']=$user['username'];
$_SESSION['surn']=$user['email'];

$_SESSION['name']=$name;
if((($name==$user['username'])&&($pwd==$user['password'])&&($user['type']=='admin')) or (($name==$user['email'])&&($pwd==$user['password'])&&($user['type']=='admin')))

{
 $fst=$user['username'];
  $eml=$user['email'];
$x=1;

break;
}
elseif((($name==$user['username'])&&($pwd==$user['password'])&&($user['type']=='limiteduser')) or (($name==$user['email'])&&($pwd==$user['password'])&&($user['type']=='limiteduser'))) {
  $fst=$user['username'];
  $eml=$user['email'];
  $y=1;
  break;
}
}
if($x==1)
{  
header("location:hommepage.php");
$_SESSION['uses']=$fst;
$_SESSION['emai']=$eml;
$_SESSION['surn'];
$_SESSION['firt'];
}
elseif($y==1)
{
 header("location:welcomestudent.php");
$_SESSION['uses']=$fst;
$_SESSION['emai']=$eml;
$_SESSION['surn'];
$_SESSION['firt'];
}
else
{
  session_destroy();
   include "index1.php";
   echo "<script>alert('Wrong Username or Password.Try again please!')</script>";
   //echo "<h4 style='margin-left:510px;color:red;margin-top:-630px;'>Wrong Username or Password!!</h4>";
}

}
else
include("index1.php");
?>
</body>
</html>
