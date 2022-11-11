<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM register_user WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your User is Deleted";
      header('location:register_user.php');
        
    }else
    {
        $_SESSION['status']="Your User is Not Deleted";
        header('location:register_user.php');
        
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
