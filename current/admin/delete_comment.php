<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>

<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM comment WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your comment is Deleted";
      header('location:comment.php');
        
    }else
    {
        $_SESSION['status']="Your comment is Not Deleted";
        header('location:comment.php');
        
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
