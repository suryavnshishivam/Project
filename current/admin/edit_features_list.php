<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

if(isset($_POST['update_features_list_btn']))
{
  $id=$_GET["id"];
  $Name = $_POST['name'];
  
  $query = "UPDATE `features_list` SET `name` = '$Name' WHERE `id` = '$id'";  
  $query_run=mysqli_query($connection,$query);  

  if($query_run)
  {
   
 
      $_SESSION['status'] = "Features updated";
      $_SESSION['status_code'] = "success";
      header('location:Features_list.php');
  }
  else 
  {
      $_SESSION['status'] = "Features Not updated";
      $_SESSION['status_code'] = "error";
      header('location:Features_list.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Features List
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
   $connection= mysqli_connect("localhost","root","","banner"); 

    $id= $_GET["id"];
    $query="SELECT * FROM features_list WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_features_list.php?id=<?php echo $row['id']; ?>" method="POST">
            
              
            <div class="form-group">
                <label > Edit features List </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" >
                   
                   
                    </div>
                 <a href="Features_list.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_features_list_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php
include('includes/scripts.php');
//include('includes/footer.php');
?>