<?php
session_start();  //knows if signed in or not.
include("PHP/connection.php");
include("PHP/functions.php");

if(isset($_SESSION['user_id'])){
  $url="main_l.php";
}
else{
    $url="main.php";
}

?>


<!DOCTYPE html>
<html>

<head>

     <!-- BOOTSTRAP CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale-1.0">
    <link rel="stylesheet" href="css/ourmissionstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


    <title>FOOD SAVIOURS</title>

</head>

<body>


                                                   <!-- edit -->

    <header>
    <nav>    
        <a href="<?= $url ?>" style="text-decoration: none;color:rgb(255,255,255);" class="top">Home</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span id="our mission" class="top"><a
        href="ourmission.php" style="text-decoration: none;color: rgb(255, 255, 255);" class="top">Our
        Mission</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span is="how_we_work" class="top"><a href="howwework.php"
        style="text-decoration:none; color: white;">How we
        work</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<span id="contact_us" class="top"><a href="contact-us.php" style="text-decoration: none; color: white;">Contact
        us</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span id="FAQ" class="top"><a href="FAQ's.php"
        style="text-decoration: none; color: rgb(255, 255, 255);">FAQ</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
</nav>
    </header> 

                                                      <!-- edit ends -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <form id="heading">OUR MISSION</form>
    <br>
    <br>
    <br>
    <form id="content">
        <ul style="list-style:disc;">
            <li>Close to a billion people – one-eighth of the world's population – still live in hunger and we have come
                up to help this world fight against hunger and malnutrition.
                We aim to bring benefits across the spectrum of society and help provide access to food to those who
                don’t have adequate means to access it.</li><br>
            <li><span class="highlight">FOOD SAVIOURS</span> is an organisation which aims to redistribute excess food
                from weddings, parties, events to those who are hungry.</li><br>

            <li><span class="highlight">FOOD SAVIOURS</span> works with Social Responsibility on their minds and with
                the help of other partners and Volunteers we create a local chapter of excess food collection
                institution through our website which in turn is distributed to those who actually need it the most. In
                this way we aim to see a world with zero food waste and no hungry people….</li>
        </ul>
    </form>
    <br>
    <br>
    <br>
    <div id="divbackground">
        <form id="subtopicbox">
            <ul style="list-style: disc;">
                <li>
                    <div class="subtopics highlight">
                        ACTION
                    </div>
                </li>
                <div class="subtopiccontent">
                    To feed the needy and hungry with untouchable edible surplus food.
                </div>
                <br>
                <br>
                <li>
                    <div class="subtopics highlight">
                        Audit Methods
                    </div>
                    <div class="subtopiccontent">
                        To sensitize people about the amount of food being wasted through standardized food waste
                        auditing methods.
                    </div>
                </li>
                <br>
                <br>
                <li>
                    <div class="subtopics highlight">
                        Citizen
                    </div>
                    <div class="subtopiccontent">
                        To raise awareness about food loss and food waste amongst citizens and bring about behavioural
                        change in them to prevent food waste at home, school or at workplace through guidance and
                        sharing of good practices
                    </div>
                </li>
                <br>
                <br>
                
            </ul>
        </form>
    </div>
</body>
