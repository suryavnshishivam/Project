<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

if(isset($_POST['Update_client_head']))
{
    $id=$_GET['id'];
    $Title=$_POST['title'];
    $Heading=$_POST['heading'];
  
  $query = "UPDATE `client_head` SET `title` = '$Title' , `heading`='$Heading' WHERE `id` = '$id'";  
  $query_run=mysqli_query($connection,$query);  

  if($query_run)
  {
   
 
      $_SESSION['status'] = "Client Head updated";
      $_SESSION['status_code'] = "success";
      header('location:client_head.php');
  }
  else 
  {
      $_SESSION['status'] = "Client Head Not updated";
      $_SESSION['status_code'] = "error";
      header('location:client_head.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Client Head
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
   $connection= mysqli_connect("localhost","root","","banner"); 

    $id= $_GET["id"];
    $query="SELECT * FROM client_head WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_client_head.php?id=<?php echo $row['id']; ?>" method="POST">
            
              
            <div class="form-group">
                <label > Edit Client Head </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    
                    <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" >
                    <input type="text" name="heading" class="form-control" value="<?php echo $row['heading']; ?>" >
                   
                   
                    </div>
                 <a href="client_head.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="Update_client_head" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php
include('includes/scripts.php');
//include('includes/footer.php');
?>