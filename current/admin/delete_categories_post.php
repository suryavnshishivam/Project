<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM post WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Post is Deleted";
      header('location:post_seen.php');
        
    }else
    {
        $_SESSION['status']="Your Post is Not Deleted";
        header('location:post_seen.php');
        
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
