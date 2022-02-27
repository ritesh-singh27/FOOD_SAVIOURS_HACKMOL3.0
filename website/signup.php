<?php

session_start();

 include("PHP/connection.php");
 include("PHP/functions.php");

 $msg="" ; 

 if(isset($_SESSION['Error'])){
     $msg=$_SESSION['Error'];
     unset($_SESSION['Error']);
 }

?>


<html>
    <head>
        <title>signup</title>

<link rel="stylesheet" href="css/signupstyle.css">      
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="apple-touch-icon" sizes="57x57" href="photos/logo.png">
<link rel="apple-touch-icon" sizes="60x60" href="photos/logo.png">
<link rel="apple-touch-icon" sizes="72x72" href="photos/logo.png">
<link rel="apple-touch-icon" sizes="76x76" href="photos/logo.png">
<link rel="apple-touch-icon" sizes="114x114" href="photos/logo.png">
<link rel="apple-touch-icon" sizes="120x120" href="photos/logo.png">
<link rel="apple-touch-icon" sizes="144x144" href="photos/logo.png">
<link rel="apple-touch-icon" sizes="152x152" href="photos/logo.png">
<link rel="apple-touch-icon" sizes="180x180" href="photos/logo.png">
<link rel="icon" type="image/png" sizes="192x192"  href="photos/logo.png">
<link rel="icon" type="image/png" sizes="32x32" href="photos/logo.png">
<link rel="icon" type="image/png" sizes="96x96" href="photos/logo.png">
<link rel="icon" type="image/png" sizes="16x16" href="photos/logo.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
 
<body>
    <div class="container">
        <div class="signup-box">
        <div class="row">
            <div class="col-md-6 box">
               <center><h2>SIGN UP</h2></center> 
                <form action="PHP/registration.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                 <div class="form-group">
                        <label for="gender">Gender</label><br>
                        <select id="gender" name="gender">
                          <option value="0">Male</option>
                          <option value="1">Female</option>
                          <option value="2">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="usercontact" class="form-control" min="1000000000" max="9999999999"required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="usermail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="password" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm password</label>
                        <input type="password" id="password1" name="password1" class="form-control" required>
                    </div><br>
                   <center><button type="submit" class="btn btn-primary">Register</button></center> 
                   <div class="error-msg"> <?= $msg ?></div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- <script src="scripts/authentication.js"> console.log("Loaded Authentication.")</script> -->
</body>
    </head>
</html>  