<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM client_head WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your data is Deleted";
      header('location:client_head.php');
        
    }else
    {
        $_SESSION['status']="Your data is Not Deleted";
        header('location:client_head.php');
        
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
