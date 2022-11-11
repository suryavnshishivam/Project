<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM features_list WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your features_list is Deleted";
      header('location:features_list.php');
        
    }else
    {
        $_SESSION['status']="Your features_list is Not Deleted";
        header('location:features_list.php');
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
