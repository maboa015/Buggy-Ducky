<?php
session_start();
// hvis boolen loggedin ikke er true så blir man redirecta til login hvor hvis du logger inn så blir den true
function check_login()
{ 
    if (!isset($_SESSION['loggedin'])){
        header('Location: login.php');
    }
}
?>
