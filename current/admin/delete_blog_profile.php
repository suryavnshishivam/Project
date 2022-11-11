<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM blog_profile WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your blog_profile is Deleted";
      header('location:blog_profile.php');
        
    }else
    {
        $_SESSION['status']="Your blog_profile is Not Deleted";
        header('location:blog_profile.php');
        
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
