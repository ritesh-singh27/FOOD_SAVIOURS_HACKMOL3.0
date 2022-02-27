<?php
session_start();

include("PHP/connection.php");
include("PHP/functions.php");

$msg="";

// if($_SERVER['REQUEST_METHOD'] == 'POST')
// {
//     //something was posted.
//     $username=$_POST['username'];
//     $password=$_POST['password'];

//   if(!empty($username) && !empty($password) && !is_numeric($username))
// {

//     // Read from the database.
//     $query="select * from users where username='$username' limit 1";
//     $result=mysqli_query($con,$query);

//      if ($result && mysqli_num_rows($result)>0)
//      {
//         $user_data=mysqli_fetch_assoc($result);

//        if($user_data['password'] === $password)
//        {

//         $_SESSION['user_id']=$user_data['user_id'];
//         header("Location:main.php");
//         die;
//       }
//     }
//   }else
//   {
//      echo "Please enter valid information!";
//   }
//   echo "Wrong username or password!";
// }

if(isset($_SESSION['Error'])){
  $msg=$_SESSION['Error'];
  unset($_SESSION['Error']);
}

?>


<html>
    <head>
        <title>user login</title>

<link rel="stylesheet" href="css/style.css">      
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
<body><br>
    <div class="container">
      <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
              <center>  <h2>Login Portal</h2> </center>
                <form action="PHP/validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                         </div><br>
                         <div class="form-group">
                             <label>Password</label>
                             <input type="password" name="password" class="form-control" required>
                        </div><br>
                            <center>  <button type="submit" class="btn btn-primary">login</button> </center><br>
                              <em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Don't have an account yet?<a href="signup.php" id="sign-up-link">&nbsp;Sign Up</a>&nbsp;&nbsp;here</em>
                              <div class="error-msg"><?= $msg ?></div>
                     </form>
                </div>
           </div>
     </div>
 </div>

</body>
</head>
</html>