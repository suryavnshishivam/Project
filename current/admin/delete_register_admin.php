<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM register WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your Admin is Deleted";
      header('location:register.php');
    }else
    {
        $_SESSION['status']="Your Admin is Not Deleted";
        header('location:register.php');
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
