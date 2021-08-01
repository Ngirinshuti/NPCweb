<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 50%;
  margin-left: 70px;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body background="npc.png">
<br><br><br><br><br>
<div class="user_card" style="margin-left: 500px;">
<form action="recovery.php" method="POST" style="max-width:500px;margin:auto;">
  <h2>Recover Form</h2>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" required="">
  </div>
  
  <button type="submit" class="btn">Recover now</button><br><br><br><br><br>
  <div class="mt-4">
         <div class="d-flex justify-content-center links">
           If you have password click  <a href="index1.php" class="ml-2" style="color: blue;text-decoration: none;margin-left:0px;margin-top:150px;">here</a> to login.
          </div><br>
</form></div>

</body>
</html>