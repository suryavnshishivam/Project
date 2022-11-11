<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>

<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM features_image WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your features_img is Deleted";
      header('location:features_img.php');
        
    }else
    {
        $_SESSION['status']="Your features_img is Not Deleted";
        header('location:features_img.php');
        
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
