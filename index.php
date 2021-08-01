<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="with=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,100;1,300;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div id="divheader"><table border="0" bgcolor="#006699" width="100%"><tr><td><img src="rnp.png" width="250" height="140" /><img src="npclogo.jpg" width="1100" height="150" style="float: left;" /></td></tr></table></div>
  <section class="header">
    <nav>
      
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>

          <li><a href="">HOME</a></li>
          <li><a href="#footers">ABOUT</a></li>
          <li><a href="#design">FACULTIES</a></li>

          <li><a href="#product">GALLERY</a></li>
          <li><a href="index1.php">LOGIN</a></li>
          

        </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>  
        <div class="text-box">
      <h1> Welcome to National Police College </h1>
      <p>"Knowledge For Professional Policing"</p>
      </div>


  </section>

  <!------faculties------->

  <section class="design" id="design">
    <h1>Academic Courses We Offer</h1>
    <p>We have four faculties<br></p>

        <div class="row">
          <div class="design-col">
            <h3>Computer Science</h3><div class="layer1">
            <p>Students who come to the computer science faculty study for four years and give them a bachelor's degree in information security provided by university of rwanda</p></div>
          </div>
          <div class="design-col">
            <h3>Law</h3><div class="layer1">
            <p>We also have a law faculty where a student is studying for four years and we give him or her diploma from university of rwanda</p></div>
          </div>
          <div class="design-col">
            <h3>PPS</h3><div class="layer1">
            <p>Professional Police Studies (PPS) here we teach professional policing,and give them a bachelor's degree in social arts provided by university of rwanda </p></div>
          </div>
        </div>
        <div class="design-col">
            <h3>Languages</h3><div class="layer1">
            <p>We offer Bachelor's degree in languages practice</p></div>
          </div>
        </div>

 </section>
    
  <!------------------- gallery----------------->

<section class="product" id="product">
  <center><h1>Inside the College</h1>

  <div class="row">
    <div class="product-col">
      <img src="images2/undergraduate.jpg">
            <div class="layer">
        
        <h3>Undergraduate students during class day</h3>

      </div>
    </div>
    <div class="product-col">
      <img src="images2/junior.jpeg">
      <div class="layer">
        
        <h3>Junior Command Students</h3>

      </div>
    </div>
    <div class="product-col">
      <img src="images2/npc15.jpeg">
      <div class="layer">
        
        <h3>Senior Command Students</h3>


      </div>
    </div>
  </div>
</center>
</section>


  <!------------------ Facilities --------->
  <section class="facilities">

    <h1>Our Facilities</h1>
    
    <div class="row">
      
      <div class="facilities-col">
        <img src="images2/image4.jpg">
            <h3>Computer Lab</h3>
            <p>We have enough computer resources for academic, educational, and research purposes.</p>
      </div>
      <div class="facilities-col">
        <img src="images2/library.jpg">
            <h3> School Library</h3>
            <p> The school library serves as a learning space for students to do independent work, use computers, access the internet, use equipment and research materials</p>
      </div>
      <div class="facilities-col">
        <img src="images2/sport.jpg">
            <h3>Sports</h3>
            <p>College sports come in a wide variety, including football, volleyball, and basketball.</p>
      </div>


    </div>
    

  </section><br><br><br><br>



    <!------------ Footer ------------>

<section class="footer" id="footers">
  <h1>About Us</h1>
   <div class="container-1">
    
    
    <div class="box-1">
      <h3>OUR MISSION</h3>
      <p>To provide high quality, innovative and professional training to police officers of Rwanda and beyond</p>
    </div>
    <div class="box-2">
      <h3>OUR VISION</h3>
      <p>To be an international center of excellence in police training and development</p>
    </div>
      <div class="box-3">
      <h3>CORE VALUES</h3>
      <p>
            <li>Integrity </li>
            <li>Professionalism</li>
            <li>Commitment</li>
            <li>Teamwork</li>
          </p>
    </div>


   </div>
    
      </section><br><br><br><br><br><br><br><br><br><br><br><br>



    <!------JavaScript for Toggle Menu------->
<script >
  var navLinks=document.getElementById("navLinks");
  function showMenu(){
    navLinks.style.right="0";
  }
  function hideMenu(){
    navLinks.style.right="-200px";
  }
</script>


 
</body>
</html>