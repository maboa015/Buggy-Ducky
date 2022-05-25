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
    <link rel="stylesheet" href="bigform.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <!-- icons w3schools Font Awesome 5 -->
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Buggy Ducky Contact</title>
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
        <li> <a href="faq.php">FAQ</a></li>
        <li> <a class="active" href="#">Contact</a></li>
        <li> <a href="profile.php"> <i class="material-icons">person_outline</i></a></li>
    </ul>
</nav>
<br>
<h1> Contact page</h1>
<!-- kontakt skjema -->
<form action="contaction.php" method="post"> <!-- method post fordi inputene skal bli postet i databasen -->
        <h1> Contact </h1>
        <br>
        <label for=""> Title:</label><br>
        <input type="text" min="3" maxlength="100" name="title" id="title"><br> <!-- name linker til hvilke columns i db inputen kal bli postet til -->
        <label for=""> Text:</label><br>
        <textarea name="content" id="content" rows="10" maxlength="1000" placeholder="enter your text here"></textarea>

        <input name="submit" type="submit" class="form_btn" value="Send"><br>
    </form>
</body>
</html>