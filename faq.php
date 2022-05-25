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
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <!-- icons w3schools Font Awesome 5 -->
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Buggy Ducky FAQ</title>
    <style>
    /* layout */
    .parent {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(5, 1fr);
        grid-column-gap: 25px;
        grid-row-gap: 35px;
    }   
        .div1 { grid-area: 1 / 1 / 2 / 2; }
        .div2 { grid-area: 1 / 2 / 2 / 3; }
        .div3 { grid-area: 2 / 1 / 3 / 2; }
        .div4 { grid-area: 2 / 2 / 3 / 3; }
        .div5 { grid-area: 3 / 1 / 4 / 2; }
        .div6 { grid-area: 3 / 2 / 4 / 3; }
        .div7 { grid-area: 4 / 1 / 5 / 2; }
        .div8 { grid-area: 4 / 2 / 5 / 3; }
        .div9 { grid-area: 5 / 1 / 6 / 2; }
        .div10 { grid-area: 5 / 2 / 6 / 3; } 
    /* layout mobil */
@media (max-width:1000px){
    .parent {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: repeat(10, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 35px;
    }
        
        .div1 { grid-area: 1 / 1 / 2 / 2; }
        .div2 { grid-area: 2 / 1 / 3 / 2; }
        .div3 { grid-area: 3 / 1 / 4 / 2; }
        .div4 { grid-area: 4 / 1 / 5 / 2; }
        .div5 { grid-area: 5 / 1 / 6 / 2; }
        .div6 { grid-area: 6 / 1 / 7 / 2; }
        .div7 { grid-area: 7 / 1 / 8 / 2; }
        .div8 { grid-area: 8 / 1 / 9 / 2; }
        .div9 { grid-area: 9 / 1 / 10 / 2; }
        .div10 { grid-area: 10 / 1 / 11 / 2; } 
    }
    .bigtext{
        border: solid 2px rgb(255, 0, 85);
        border-top: solid 20px rgb(255, 22, 100);
        line-height: 20px;
        width: 90%;
        margin-left: 5%;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 5px;
        padding-top: 15px;
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
        <li> <a href="index.php">Home</a></li>
        <li> <a href="download.php">Download</a></li>
        <li> <a class="active" href="#">FAQ</a></li>
        <li> <a href="contact.php">Contact</a></li>
        <li> <a href="profile.php"> <i class="material-icons">person_outline</i></a></li>
    </ul>
</nav>
<br>
<h1 title="Frequently Asked Questions">FAQ</h1>
<br>

<div class="parent">
    <div class="bigtext div1">
    <h2> Do I need unity to play this game?</h2>
    <p> No, you don't. What you are downloading is a build of my game where all the files and scripts get compiled to be executed under the Mono Common Language Runtime just like any .NET application.   </p>
    </div>
    
    <div class="bigtext div2">
    <h2> Can my pc run the game? </h2>
    <p> Yes, your PC can run the game if your pc is on Windows OS desktop. A 64-bit OS is recommended but you can run on a 32-bit OS as well. Which means Windows 7 is supported. </p>
    <br>
    <p> As for your hardware as long as you have 4 GB RAM and a metal-capable Intel or AMD GPU you should be good to run the game. </p>
    </div>
    
    <div class="bigtext div3">
    <h2> Can I get malware from the install? </h2>
    <p> Before uploading I checked my build on <a href="https://www.virustotal.com/gui/home/upload" target="_blank"> TotalVirus.com</a> or any malware and got 0 found in results, so no, you don't.  </p>
    </div>
    
    <div class="bigtext div4">
    <h2> Game doesn't run after install </h2>
    <p> After downloading go to your file explorer and to downloads. From there find the folder you just installed and Extract the folder. After unzipping click yourself in the folder and click Termin.exe to run the game.  </p>
    <br>
    <p> If it doesn't work that means that you experimented with some files and took them out of the folders they are supposed to be connected in, making the build not runnable. To easy fix it, simply delete the bad folder and reinstall the game from the <a href="download.php">download page</a> and be careful to not take anything out of it this time. </p>
    </div>
    
    <div class="bigtext div5">
        <h2> What are the controls? </h2>
        <p> WASD to move. </p>
        <p> Space to jump. </p>
        <p> E to pick up or drop objects. </p>
        <p> R to restart level. </p>
        <p> Esc to open the menu in game. </p>
    </div>
    
    <div class="bigtext div6">
        <h2> What do I do on level x? </h2>
        <p> Bro, this is a puzzle game. Ofc im not gonna give you the keys to my levels. Lmao. </p>
        <br>
        <p> Think about it, its not that difficult and is fun to find out yourself. </p>
        <br>
        <p> listen carefully to the audio messages played in each level as they got hints sprinkled around.</p>
    </div>
    
    <div class="bigtext div7">
        <h2> Will I get spam mailed on my email? </h2>
        <p> No, you will not get spammed, or notified by any changes on my game or website. I'm not the annoying guy.</p>
        <br>
        <p> But in the expansion, I would like to add a forgot password function which needs your email which is why I am collecting your email. </p>
    </div>
    
    <div class="bigtext div8">
        <h2> Why do I need to make an account to download? </h2>
        <p> I want to have count on how many players my game has, and a must have user to play system makes that an easy overview. </p>
        <br>
        <p> Also, I need it for the competency. </p>
    </div>
    
    <div class="bigtext div9">
        <h2> What did I agree to by signing up? </h2>
        <p> Nothing scary, Here is my <a target="_blank" href="privacypolicy.html"> Privacy Policies</a> but in short you agreed to me having your email.  </p>
    </div>

    <div class="bigtext div10">
        <h2> your question was not answered? </h2>
        <p> then you can personally contact me on the <a href="contact.php"> contact page</a> or by email: <a href="mailto:maboa015@osloskolen.no"> maboa015@osloskolen.no</a></p>
    </div>
</div>
<div class="space"></div>
</body>
</html>