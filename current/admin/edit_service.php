<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



if (isset($_POST['edit_service']))
{
    $id= $_POST['edit_id'];
    $query="SELECT * FROM service WHERE id='$id'";
    $query_run=mysqli_query($connection, $query);


}



if(isset($_POST['update_service_btn']))
{
  $id=$_POST['id'];
  $Title = $_POST['title'];
  $Service = $_POST['service'];
  $Full_read = $_POST['full_read'];
  
   $query = "UPDATE `service` SET `title` = '$Title', `service` = '$Service', `full_read` = '$Full_read'
  WHERE `id` = '$id'";  


  $query_run=mysqli_query($connection,$query);  

  if($query_run)
  {
   
 
      $_SESSION['status'] = "service updated";
      $_SESSION['status_code'] = "success";
      header('location:service.php');
  }
  else 
  {
      $_SESSION['status'] = "service Not updated";
      $_SESSION['status_code'] = "error";
      header('location:service.php');
  }
 }
 
?>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Service
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
   $connection= mysqli_connect("localhost","root","","banner"); 
  if (isset($_POST['edit_service']))
{
    $id= $_POST['edit_id'];
    $query="SELECT * FROM service WHERE id='$id'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
        ?>
        

            <form action="edit_service.php" method="POST">
            
              
            <div class="form-group">
                <label > Edit Service </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    
                    <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" >
                    <input type="text" name="service" class="form-control" value="<?php echo $row['service']; ?>" >
                    <input type="text" name="full_read" class="form-control" value="<?php echo $row['full_read']; ?>" >
                    </div>
                 <a href="service.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_service_btn" class="btn btn-primary" > Updated  </button>

                </form>
            <?php
    }    

}
?>     

  </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->



<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>