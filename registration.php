<?php
session_start();
include("connection.php");
//var_dump($_POST);
if(isset($_POST['submit'])){
    //variabler
    $Username = $_POST['username'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
   
    $Password = md5($Password);
    if(!empty($Username) && !empty($Email) && !empty($Password) && !is_numeric($Username))//sjekker at noe er skrevet i hver input og at usernamen ikke er kunn tall
    {
        //lagre info i databasen
        $query = "INSERT INTO login (username,email,password) values ('$Username','$Email','$Password')"; //riktig å ha alt i riktig order for at valuesene skal bli satt inn i riktig column
        mysqli_query($con, $query); //save
        header("Location: login.php"); 
        die; // rip :(
    }
    else{
        echo "please enter some valid information"; // lar brukeren vite at noe er galt
    }
}
