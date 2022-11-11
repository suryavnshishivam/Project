<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM about_try WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your about_try is Deleted";
      header('location:about_try.php');
        
    }else
    {
        $_SESSION['status']="Your about_try is Not Deleted";
        header('location:about_try.php');
        
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
