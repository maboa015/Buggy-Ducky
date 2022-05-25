<?php
session_start();
include("connection.php");
var_dump($_POST);
if(isset($_POST['submit'])){
    //variabler 
    $Title = $_POST["title"];
    $Content = $_POST["content"];

    if(!empty($Title) && !empty($Content)){
        $query = "INSERT INTO contact (title, content) values ('$Title','$Content')";
        mysqli_query($con, $query); //save
        header("Location: thx.php");
    }
    else{ // hvis skjema ikke er fylt ut så sendes det ikke
        echo("please enter in a title and some content to it");
    }
}
?>