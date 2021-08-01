<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>
<body>

<div id="divheader"><table border="0" width="100%" style=""><tr><td><img src="rnp.png" width="250" height="120" style="margin-top: -0.2cm;" /><img src="npclogo.jpg" width="1100" height="100" style="float: left;" /></td></tr></table>
<section style="background-color:#eae8fd;margin-top: -0.35cm;color: black;height: 3cm;" class="header" >
    <nav> 
    <div class="nav-links" id="navLinks">
        <i class="" onclick="showMenu()"></i>
         <ul >
            <li><a href="hommepage.php" style="color:blue;font-style: italic;" class="active">Home</a></li>
            <li><a href="new1.php" style="color:blue;">Add student</a></li>
            <li><a href="update1.php" style="color:blue;">Update student</a></li>
            <li><a href="delete.php" style="color:blue;">Delete student</a></li>
            <li><a href="statement1.php" style="color:blue;">Search student</a></li>
            <li><a href="viewadmin.php" style="color:blue;">Messages</a></li>
            <li><a href="updateuser1.php" style="color:blue;">Update account</a></li>
       <li><a href="logout.php" style="color:blue;">Logout</a></li>
        </ul>
 <i class="" onclick="showMenu()"></i>
    </nav>
<!--------javascript for toggle menu------>
</section></div><script>
  var navLinks=document.getElementById("navLinks");
  var menu=document.querySelector("nav-links");
  function showMenu(){
    menu.style.right="0px";
    //navLinks.style.right= "-200px";
  }
  function hideMenu(){
    menu.style.right="-200px";
    //navLinks.style.right= "0px";
  }
</script></body>
</html>