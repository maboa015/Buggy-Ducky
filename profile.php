<?php
include("function.php");
$user_data = check_login();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '1234';
$DATABASE_NAME = 'login';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM login WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']); //feil her :I
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
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
    <title>Buggy Ducky Profile</title>
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
        <li> <a href="contact.php">Contact</a></li>
        <li> <a href="#"> <i class="material-icons">person_outline</i></a></li>
    </ul>
</nav>
<br>
<div class="content">
        <h1> Account Details: </h1>
        <br>
        <div>
            <table>
                <tr>
                    <td class="right">Username:</td>
                    <td><?=$_SESSION['name']?></td>
                </tr>
                <tr>
                    <td class="right">Password:</td>
                    <td>You better remember <i class="far fa-thumbs-up"></i></td>
                </tr>
                <tr>
                    <td class="right">Email:</td>
                    <td><?=$email?></td>
                </tr>
                <tr>
                    <td><a class="btn" href="logout.php"> log out</a><br></td>
                </tr>
            </table>
        </div>
</div>
</body>
</html>