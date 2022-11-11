<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM blog WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your blog is Deleted";
      header('location:blog.php');
        
    }else
    {
        $_SESSION['status']="Your blog is Not Deleted";
        header('location:blog.php');
        
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
