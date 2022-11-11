<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM categories WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your categories is Deleted";
      header('location:categories.php');
        
    }else
    {
        $_SESSION['status']="Your categories is Not Deleted";
        header('location:categories.php');
        
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
