<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>
<?php 

 $connection= mysqli_connect("localhost","root","","banner");

    $id = $_GET["id"];

    $query="DELETE  FROM team1 WHERE id='$id'"; 
    $query_run=mysqli_query($connection,$query); 

    if ($query_run)
    {
      $_SESSION['status']="Your team is Deleted";
      header('location:team_tit.php');
        
    }else
    {
        $_SESSION['status']="Your team is Not Deleted";
        header('location:team_tit.php');
        
    }


?>


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>
