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
        <ul>
            <li><a href="welcomestudent.php" style="color:blue;font-style: italic;">Home</a></li>
            <li><a href="studinfo.php" style="color:blue;font-style: italic;">My profile</a></li>
            <li><a href="updateuser2.php" style="color:blue;font-style: italic;">Update my account</a></li>
            <li><a href="contact.php" style="color:blue;font-style: italic;">Contact us</a></li>
            <li><a href="viewst.php" style="color:blue;font-style: italic;">Messages</a></li>
       <li><a href="logout.php" style="color:blue;font-style: italic;">Logout</a></li>
        </ul>
    </div>
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