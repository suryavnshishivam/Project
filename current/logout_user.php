<?php 

session_start();

if (isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['name']);
    header('Location: login_user.php');
}

?>