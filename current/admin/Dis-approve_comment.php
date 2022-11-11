<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

?>

<?php 
   $connection = mysqli_connect("localhost","root","","banner");
if (isset($_GET["id"])){

    $id = $_GET["id"];
    
    
    $sql ="UPDATE comment SET status ='OFF'  WHERE id='$id'";
    $Execute= $connection->query($sql);
     
    
  if($Execute)
  {
   
 
      $_SESSION['status'] = "Dis-Approved ";
      $_SESSION['status_code'] = "success";
      header('location:comment.php');
  }
  else 
  {
      $_SESSION['status'] = "Dis-Approved Not ";
      $_SESSION['status_code'] = "error";
      header('location:comment.php');
  }
 
}
?>




<?php
include('includes/scripts.php');
include('includes/footer.php');
?>