<?php
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Signup</title>
</head>
<body>
    <!-- registrering skjema -->
    <form action="registration.php" method="post"> <!-- method post fordi inputene skal bli postet i databasen -->
        <h1> Registration</h1>

        <label for=""> Username:</label><br>
        <input type="text" min="3" name="username" id="username"><br> <!-- name linker til hvilke columns i db inputen kal bli postet til -->
        <label for=""> Email:</label><br>
        <input type="text" min="3" name="email" id="email"><br>
        <label for=""> Password:</label><br>
        <input type="password" min="6" name="password" id="password" placeholder="dont forget"><br>
        <p> By signing up you agree to the <a target="_blank" href="privacypolicy.html">Privacy Policies</a></p><br> 

        <input name="submit" type="submit" class="form_btn" value="Sign up"><br>
        <a href="login.php"> back to login</a>

    </form>
</body>
</html>
