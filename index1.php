<!DOCTYPE html>
<html>
    
<head>
  <title>NATIONAL POLICE COLLEGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devive-width,initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
  margin-left: 100px;
}

.btn:hover {
  opacity: 1;
}
  </style>
</head>
<body style="margin-top: 0cm;margin-left: 0cm;">
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100" >
      <div class="user_card">
        <div class="d-flex justify-content-center" >
          <div class="brand_logo_container">
            <img src="RNP.png" class="brand_logo" alt="Logo" >
          </div>
        </div>
        <div class="d-flex justify-content-center form_container">
          <form method="post" action="login.php">
            <section></section>
           <div class="input-group mb-3">
             
            <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="username or email" name="usern" required="">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pass" required="">
  </div>
            <div class="form-group">
              <!--<div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customControlInline">
                <label class="custom-control-label" for="customControlInline">Remember me</label>
              </div>-->
            </div>
              <div class="d-flex justify-content-center mt-3 login_container">
          <input type="submit" name="sub" value="Login" class="btn" style="border-radius: 10px;">
           </div>
          </form>
        </div>
    <br>
        <div class="mt-4">
         <div class="d-flex justify-content-center links">
            <p style="margin-top:5cm;margin-left: -8cm;">Don't have an account?</p> <a href="createaccount.php" class="ml-2" style="text-decoration: none;color: red;margin-top:5cm;">Sign Up</a>
          </div><br>
          <div class="d-flex justify-content-center links">
            <a href="recover.php" style="text-decoration: none;color: red;margin-top:-1cm;margin-left: -8cm;">Forgot your password?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

