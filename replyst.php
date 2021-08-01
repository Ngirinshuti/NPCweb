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
<style>
	.chat-box{
		max-width: cal(100% - 130px);
		background: #333;
		display: flex;
		align-items: flex-end;
	}
	.chat-box.chat{
		margin: 15px;
	}
	.chat-box.chat p{
		word-wrap: break-word;
		padding: 18px 16px;
		box-shadow: 0 0 32px rgb(0, 0, 0 / 8%), 0 16px 16px -16px rgb(0, 0, 0 / 10%);
	}
</style>
</head>
<body background="npc.png">
<?php 
include "menust.php";
?>
<div id="course" class="container-1">
	<form method="POST" action="contactus2.php">
<p>
<center><fieldset style="background-color: #eae8fd;width: 100%;margin-top: -20px;height: 450px;border: 0px;"><br><br>
<br><br><br><br>
	<div class="chat-box">
		
	</div>
<?php
//$dele=$_POST['dele'];
include 'connect.php';
$se=$_GET['identity'];
$sql=mysqli_query($conn,"SELECT * FROM contact where id='$se'");
  while($row = mysqli_fetch_array($sql)){
            $emd=$row['idea'];
            $emly=$row['email'];
            $sql1=mysqli_query($conn,"SELECT * FROM class where email='$emly'");
  while($row1 = mysqli_fetch_array($sql1)){
  	$df=$row1['fname'];
  	$dg=$row1['lname'];
                echo "<div style='background-color:grey;margin-top:-0.3cm;width:7cm;'>Message from Administration </div> <br><section style='width:5cm;background-color:blue;border-radius:75px 75px 0px ;height:2cm;color:white'>". $emd. "</section><br>";
        }        
    }
?>
<textarea name="text" style="width: 5cm;height: 0.8cm;margin-left: 11cm;margin-top: -0.5cm;border: 2px solid grey;"></textarea><input type="submit" name="reply" value="Reply">
<input type="hidden" name="subject" value="Reaction of administration"><br><br><br><br><br><br><br><br><br><br>
</fieldset></center></p></form></div></body></html>