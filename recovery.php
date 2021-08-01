<?php 
$email=$_POST['email'];
include "connect.php";
$w=0;
$num=0;
$st='npc!';
$sql=mysqli_query($conn,"select * from account where email='$email'");
while ($fet=mysqli_fetch_array($sql)) {
	if ($email==$fet['email']) {
		$num=mysqli_num_rows(mysqli_query($conn,"select * from account"));
		$w=1;
	}
}
if ($w==1) {
	$st=$st.$num;
	$p=mysqli_query($conn,"update account set password='$st' where email='$email'");
	if ($p) {
		echo "<script>alert('your new password is $st, you have to update it!')</script>";
		include "index1.php";
	}
	else
	{
		echo "<script>alert('Email not found,Try again please !!')</script>";
		include "recover.php";
	}
}
?>