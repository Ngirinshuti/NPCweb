<?php 
 $user=$_POST['user'];
 $email=$_POST['email'];
 $pwd=$_POST['pwd'];
 $cpwd=$_POST['cpwd'];
 $type="limiteduser";
$re=0;
$found=0;
 if ($pwd!=$cpwd) {
 	echo "<script>alert('Password is not matching... Try again please!')</script>";
 	include "createaccount.php";
 }
 else
 {
  include "connect.php";
  $em=mysqli_query($conn,"select email from class");
while ($fet=mysqli_fetch_array($em)) {
   if ($email==$fet['email']) {
       $found=1;
         $emi=mysqli_query($conn,"select email from account");
while ($feti=mysqli_fetch_array($emi)) {
   if ($email==$feti['email']) {
       $re=1;

   }
}
}
}
if ($found==1) {
if($re!=1)
{
    if($user!=$pwd and $email!=$pwd)
    {
$q=mysqli_query($conn,"insert into account values(null,'$user','$email','$pwd','$type')");
if ($q) {
	 	echo "<script>alert('Your have created an account! Click ok to login.')</script>";
 	include "index1.php";
}
else{
    echo "<script>alert('Failed to create an account!... Try again please!')</script>";
    include "createaccount.php"; 
}
}
else
{
 echo "<script>alert('Your username or email must differ from you password!... Try again please!')</script>";
    include "createaccount.php";    
}
}
else
{
 echo "<script>alert('This email is used by someone else!... Try to use another email!')</script>";
    include "createaccount.php";   
}
 }
 else
{
echo "<script>alert('Access denied, may be you are not registered as NPC student!... Try again!')</script>";
    include "createaccount.php";  
}
}

 ?>
