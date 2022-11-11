<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM project WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your project is Deleted";
      header('location:project.php');
        
    }else
    {
        $_SESSION['status']="Your project is Not Deleted";
        header('location:project.php');
        
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
