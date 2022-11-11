<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

if(isset($_POST['update_features_btn']))
{
  $id=$_GET["id"];
  $Header = $_POST['header'];
  $Bio = $_POST['bio'];
  
  
  $query = "UPDATE `features` SET `header` = '$Header', `bio` = '$Bio' WHERE `id` = '$id'";  
  $query_run=mysqli_query($connection,$query);  

  if($query_run)
  {
   
 
      $_SESSION['status'] = "Features updated";
      $_SESSION['status_code'] = "success";
      header('location:Features.php');
  }
  else 
  {
      $_SESSION['status'] = "Features Not updated";
      $_SESSION['status_code'] = "error";
      header('location:Features.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Features
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
   $connection= mysqli_connect("localhost","root","","banner"); 

    $id= $_GET["id"];
    $query="SELECT * FROM features WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_features.php?id=<?php echo $row['id']; ?>" method="POST">
            
              
            <div class="form-group">
                <label > Edit features </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    
                    <input type="text" name="header" class="form-control" value="<?php echo $row['header']; ?>" >
                    <input type="text" name="bio" class="form-control" value="<?php echo $row['bio']; ?>" >
                   
                    </div>
                 <a href="Features.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_features_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php
include('includes/scripts.php');
//include('includes/footer.php');
?>