<?php
 session_start();
 ob_start();
 $connection=mysqli_connect("localhost","root","","banner");

if($connection)
{
 //echo "Database Connected";
}
else
{
    header("Location: dbconfig.php");
}

if(!$_SESSION['username'])
{
    header('Location: login.php');
}

?>