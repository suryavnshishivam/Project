<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM slide_service WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your delete_slide_service is Deleted";
      header('location:slide_service.php');
        
    }else
    {
        $_SESSION['status']="Your delete_slide_service is Not Deleted";
        header('location:slide_service.php');
        
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
