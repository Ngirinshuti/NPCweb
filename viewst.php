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
<link rel="stylesheet" href="style.css" /><!--
<link rel="stylesheet" href="style9.css" />-->
<link rel="stylesheet" href="stylee.css">
<link rel="stylesheet" href="table.css">
<title>NATIONAL POLICE COLLEGE</title>
</head>

<body background="npc.png" class="header">
<?php 
include "menust.php";
?>
<div id="course">
<p>
<center><fieldset style="background-color: #eae8fd;width: 80%;margin-top: -20px;height: 450px;border: 0px;"><br><br>

	<div class="banner_image">
    <div class="table_responsive">
      <?php
      //$fst=$_SESSION['uses'];
//$eml=$_SESSION['emai'];
include "connect.php";
//$sql = "SELECT * FROM contact";
$sql=mysqli_query($conn,"SELECT * FROM contact where type='administration'");
if($sql){
    if(mysqli_num_rows($sql) > 0){   
  
        echo "<table class='tbl1' >";
        echo "<thead>";
            echo "<hr><tr>";
                echo "<th>First name</th>";
                echo "<th>Last name</th>";
                echo "<th>email</th>";
                echo "<th>Message</th>";
                  echo "<th>Activities</th>";
            echo "</tr>";
            echo "</thead>";
            echo "</table><hr>";
        while($row = mysqli_fetch_array($sql)){
            echo "<table class='tbl1'>";
            echo "<tbody>";    
            echo "<tr border>";
            $emd=$row['email'];
            $identity=$row['id'];
            $sqly=mysqli_query($conn,"SELECT * FROM class where email='$emd'"); 
            while ($data=mysqli_fetch_array($sqly)) {
           $firstname=$data['fname'];
           $lastname=$data['lname'];
           echo "<input type='hidden' value='$identity' name='dele' size='1px' style='border:none;color:black;margin-left:0cm;'>";
                echo "<td>$firstname</td>";
                echo "<td>$lastname</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['idea'] . "</td>";
                echo "<td>"?><a href="replyst.php?identity=<?php echo $row['id'] ?>"><button>Reply message</button></a>
           <?php echo "</td></tr>";
            echo "</tbody>";
            echo "</table><hr>";
        }
        } 
        // Free result set00000
        mysqli_free_result($sql);
    } else{
        echo "No records matching your query were found.";
    }
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
?>
    </div>
	</div>
</div>	
</body>
</html>

