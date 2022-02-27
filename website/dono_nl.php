
<?php
session_start();

include("PHP/connection.php");
include("PHP/functions.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //something was posted.
    $d_id=random_num(20);
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $location=$_POST['location'];
    $location_1=$_POST['location_1'];
    $pincode=$_POST['pincode'];
    $food=$_POST['food'];
    $date=$_POST['date'];
    
           
        $query="insert into donations (d_id,name,contact,location,location_1,pincode,food,date) values ('$d_id','$name','$contact','$location','$location_1','$pincode','$food','$date')";
   
        mysqli_query($con,$query);
   
        header("Location:Thankyou.html");
        die;
}
   ?>



<html>
    <head>
        <title>one time donation</title>
        <link rel="stylesheet" href="css/donate.css">
        
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
        <div class="donate-box">
        <div class="row">
            <div class="col-md-6 donate-left">
            <h2>About our "One Time Donation" facility....</h2>
            <p><em>The One Time Donation facility allows people across the nation to donate any time anywhere without signing up to an account.
                This feature allows users who dont donate very frequently and want to experience a fast donation.
                </em> </p>
            </div>

            <div class="col-md-6 donate-right">
                <h2>One Time Donation</h2>
                <form method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>                        
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="contact" class="form-control" required>                        
                    </div>
                    <div class="form-group">
                        <label>Street no/house no</label>
                        <input type="number" name="location" class="form-control" required>                        
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" name="location_1" class="form-control" required>                        
                    </div>
                    <div class="form-group">
                        <label>Pincode</label>
                        <input type="text" name="pincode" class="form-control" required>                        
                    </div>
                    <div class="form-group">
                        <label>Date of donation</label>
                        <input type="date" name="date" class="form-control" required>                        
                    </div>
                    <div class="form-group">
                        <label>Quantity of food(approx)</label>
                        <input type="text" name="food" class="form-control" required><br>
                          <center>  <button type="submit" class="btn btn-danger">Donate</button> </center><br>
                                                
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
   


</head>
</html>