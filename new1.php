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
  <meta name="viewport" content="with=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="stylee.css">
<title>NATIONAL POLICE COLLEGE</title>
<style>
  input[type=text]{
    border-radius: 5px;
    margin-top: 5px;
    width: 300px;
    height: 20px;
  }
   input[type=date]{
    border-radius: 5px;
    margin-top: 5px;
    width: 300px;
    height: 20px;
  }
   input[type=email]{
    border-radius: 5px;
    margin-top: 5px;
    width: 300px;
    height: 20px;
  }
   input[type=file]{
    border-radius: 5px;
    margin-top: 5px;
    width: 300px;
    height: 20px;
    text-decoration: none;

  }
  select
  {
      border-radius: 5px;
    margin-top: 7px;
    width: 300px;
    height: 20px;
  }
</style>
</head>

<body background="npc.png">
<?php include "menu.php";?>
<br><br><br><br><br>
<div id="course" class="container-1">
<p>
<center>
<fieldset style="background-color: #eae8fd;width: 100%;margin-top: -120px;border: 0px;">
<br><br><br><h2><font color="green">NEW STUDENT REGISTRATION</font></h2><br>
<form method="POST" action="new.php" enctype="multipart/form-data" >
<b><i>First Name:&emsp;</i></b><input type="text" name="first" size="40" /><br>
<b><i>Last NAME:&emsp;</i></b><input type="text" name="surn3" size="40" /><br><b><i>Email:&emsp;&emsp;&emsp;&emsp;</i></b><input type="email" name="email" size="40" /><br>
<b><i>Gender:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</i>
</b><input type="radio" name="sex" value="male">Male&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="radio" name="sex" value="female">Female<br>
<b><i>Date of birth:&emsp;</i></b><input type="date" name="age"><br> <b><i>Level:&emsp;&emsp;&emsp;&emsp;</i></b><select name="level"><option>One</option><option>Two</option><option>Three</option><option>Four</option></select><br> <b><i>Faculty:&emsp;&emsp;&emsp;</i></b><select name="faculty"><option>Computer science&emsp;</option><option>PPS</option><option>law</option><option>Languages</option></select><br><br> <b><i>Picture:&emsp;&emsp;&emsp;</i></b> <input type="hidden" name="MAX_FILE_SIZE" value="10000000"  />
<input type="file" name="file"  /><br><br>
<center><input type="submit" value="SAVE" onclick="return confirm('do you want really to save this student?');" style="background-color:blue;" />
<input type="reset" value="RESET" style="background-color:blue;"/>
</center></form><center><font color="green"><p> &copy; National Police College </p></font></center>
</fieldset></p>
</div></div>
</body>
</html>
