<?php // avslutter session gjør sånn at du nå må logge inn for å accesse noen sider som profil feks
session_start();
if(session_destroy())
{
// Redirect to the login page:
header('Location: login.php');
}
?>
