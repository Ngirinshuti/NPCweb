<?php
session_start();
if(!isset($_SESSION['name']))
{
header("location:index.php");
}
$acc=$_POST['acc'];
$_SESSION['ac']=$acc;
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
<center><fieldset style="background-color: #eae8fd;width: 100%;margin-top: -20px;height: 450px;border: 0px;"><br><br>
<br><br><br><br>
<?php
include("connect.php");
$dx=0;
if($acc)
{
 $clo=mysqli_query($conn,"select *  from class where email='$acc'");
    echo"<form method='post' action='updatestudent.php'>";
	echo"<H3 style='margin-top:-50px;'><font color=green>CHANGE STUDENT'S INFORMATION</font></H3>";
	  echo"<br><table align=center width=90% bgcolor=skyblue style='margin-top:-20px;'>";
	  
               while($cl=mysqli_fetch_array($clo))
              {
            $aa=$cl['fname'];
			 $bb=$cl['lname'];
			  
			   $dd=$cl['sex'];
			   $ee=$cl['age'];
			    $ff=$cl['level'];
				 
				   
			           $gg=$cl['class'];
					  $hh=$cl['email'];
					  $as=$hh;

					  $ii=$cl['picture'];
					  if($hh==$acc)
					  {
					  	$dx=1;
					  	}
					  }
					  	if($dx==1)
					  	{
						$_SESSION['acy']=$as;
						echo"<tr><td>";
						  echo"<tr><td align=center colspan=2>";
		echo"<font color=blue size=5px><b><em>Information about $aa $bb</em><b/></font>";
		 echo"<center><img src='images/$ii' height='90' width='120'/></center><br>";
		echo"</td></tr>";
		echo"<tr><td align=center>";
		   echo"<font color=black>Firstname:</font></td><td align=center><input type='text' name='eecode' value='$aa'>";
		echo"</td></tr>";
		echo"<tr><td align=center>";
		   echo"<font color=black>Surname:</font></td><td align=center><input type='text' name='fname' value='$bb'>";
		echo"</td></tr>";
		echo"<tr><td align=center>";
		   echo"<font color=black>sex:</font></td><td align=center><input type='text' name='lstnam' value='$dd'>";
		echo"</td></tr>";
		echo"<tr><td align=center>";
		   echo"<font color=black>birth date:</font></td><td align=center><input type='text' name='statu' value='$ee'>";
		echo"</td></tr>";
		echo"<tr><td align=center>";
		   echo"<font color=black>level:</font></td><td align=center><input type='text' name='sxy' value='$ff'>";
		echo"</td></tr>";
		echo"<tr><td align=center>";
		   echo"<font color=black>class:</font></td><td align=center><input type='text' name='ag' value='$gg'>";
		echo"</td></tr>";
		
		   
		echo"<tr><td align=center>";
		   echo"<font color=black>Email:</font></td><td align=center><input type='email' name='qualif' value='$hh' readonly=''>";
		echo"</td></tr>";
		
		   echo"</table>";
		    ?>
		    <INPUT TYPE="submit" value="Save changes" onClick="return confirm('do you want save  changes made?');">	<?php
		   }
		   	else
	{
	echo "This email ($acc) not found in database. try again!";
	}
		   
		}
		else
	{
	echo "<br><br>This email ($acc) not found in database. try again!";
	}
?>

</center></p>
</fieldset></div>
</body>
</html>
