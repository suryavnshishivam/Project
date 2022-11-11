<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM banner WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your banner is Deleted";
      header('location:banner.php');
        
    }else
    {
        $_SESSION['status']="Your banner is Not Deleted";
        header('location:banner.php');
        
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
