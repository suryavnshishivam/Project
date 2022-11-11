<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

if(isset($_POST['update_footer_get_btn']))
{
  $id=$_GET["id"];
  $Title = $_POST['title'];
  $Address = $_POST['address'];
  $Phone_no = $_POST['phone_no'];
  $Email = $_POST['email'];
  
  
  $query = "UPDATE `footer_get` SET `title` = '$Title', `address` = '$Address' ,`phone_no`='$Phone_no', `email`='$Email' WHERE `id` = '$id'";  
  $query_run=mysqli_query($connection,$query);  

  if($query_run)
  {
   
 
      $_SESSION['status'] = "Footer get updated";
      $_SESSION['status_code'] = "success";
      header('location:footer_get.php');
  }
  else 
  {
      $_SESSION['status'] = "Footer get Not updated";
      $_SESSION['status_code'] = "error";
      header('location:footer_get.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Footer get
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
   $connection= mysqli_connect("localhost","root","","banner"); 

    $id= $_GET["id"];
    $query="SELECT * FROM footer_get WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_footer_get.php?id=<?php echo $row['id']; ?>" method="POST">
            
              
            <div class="form-group">
                <label > Edit footer </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    
                    <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" >
                    <input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>" >
                    <input type="text" name="phone_no" class="form-control" value="<?php echo $row['phone_no']; ?>" >
                    <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" >
                   
                    </div>
                 <a href="footer_get.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_footer_get_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php
include('includes/scripts.php');
//include('includes/footer.php');
?>