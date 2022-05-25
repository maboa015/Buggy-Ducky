<?php //fjerner denne etterpå fordi homepage ikke trenger login men alt annet som profil og download trenger
include("function.php");
$user_data = check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/assets.css">
    <link rel="stylesheet" href="style/assets2.css">
    <link rel="stylesheet" href="style/index.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <!-- icons w3schools Font Awesome 5 -->
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Buggy Ducky Home</title>
    <style>
        nav{
            margin-bottom:0px;
        }
    </style>
</head>
<body>
<nav> <!-- navbar -->
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo"> Buggy Ducky </label>
    <ul>
        <li> <a class="active" href="#">Home</a></li>
        <li> <a href="download.php">Download</a></li>
        <li> <a href="faq.php">FAQ</a></li>
        <li> <a href="contact.php">Contact</a></li>
        <li> <a href="profile.php"> <i class="material-icons">person_outline</i></a></li>
    </ul>
</nav>

<div class="page1">
    <div class="space"></div>
    <h1 class="glitchy highlighted"> BUGGY DUCKY</h1>
    <div class="space"></div>
    <h3> Watch as your <div class="pink"> creator </div> breaks down over bugs </h3>
</div>

<div class="page2">
    <div class="homeparent">
    <div class="div1"> 
        <div class="space"></div>
        <h1> About: </h1> 
        <br>
        <p class="bigtext"> Buggy Ducky is a short puzzle game where you play as Ducky. your game files get corrupted and you need to take advantage of the bugs that appear to solve some levels. </p>
        <div class="space"></div>
        <a class="btn" href="download.php"> DOWNLOAD?</a>
    </div>
    <div class="div2"> 
        <img src="media/1000.jpg" class="big" alt="buggyducky" title="Buggy Ducky">
    </div>
</div> 
</div>
</body>
</html>